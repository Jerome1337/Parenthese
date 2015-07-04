/**
 * requestAnimationFrame
 */
window.requestAnimationFrame = (function(){
    return  window.requestAnimationFrame       ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame    ||
            window.oRequestAnimationFrame      ||
            window.msRequestAnimationFrame     ||
            function (callback) {
                window.setTimeout(callback, 1000 / 60);
            };
})();

/**
 * Brush
 */
var Brush = (function() {

    'use strict';

    /**
     * @constructor
     * @public
     */
    function Brush(x, y) {
        this.x = x || 0;
        this.y = y || 0;

        this._tipReset();
        this._drops = [];
    }

    Brush.prototype = {
        size:       35,
        color:      '#000',
        inkAmount:  7,
        splashing:  true,
        dripping:   true,
        _latestPos: null,
        _strokeId:  null,

        isStroke: function() {
            return Boolean(this._strokeId);
        },

        startStroke: function() {
            if (this.isStroke()) return;
            this._tipReset();
            this._strokeId = new Date().getTime();
        },

        endStroke: function() {
            this._strokeId  = null;
            this._latestPos = null;
        },

        render: function(ctx, x, y) {
            var tip      = this._tip,
                strokeId = this._strokeId,
                dx, dy, dist,
                i, len;

            if (!this._latestPos) {
                this._latestPos = { x: this.x, y: this.y };
            } else {
                this._latestPos.x = this.x;
                this._latestPos.y = this.y;
            }
            this.x = x;
            this.y = y;

            dx   = this.x - this._latestPos.x;
            dy   = this.y - this._latestPos.y;
            dist = Math.sqrt(dx * dx + dy * dy);

            len = tip.length;

            for (i = 0; i < len; i++) {
                tip[i].update(dx, dy, dist);
            }

            if (this.isStroke()) {
                for (i = 0; i < len; i++) {
                    tip[i].draw(ctx);
                }

                if (this.splashing && dist > 75) {
                    var maxNum = (dist - 75) * 0.5 | 0,
                        r, a, sx, sy;

                    ctx.save();
                    for (i = 0, len = random(maxNum) | 0; i < len; i++) {
                        r = random(dist, 1);
                        a = random(Math.PI * 2);
                        sx = this.x + r * Math.sin(a);
                        sy = this.y + r * Math.cos(a);
                        dot(ctx, sx, sy, this.color, random(10, 0));
                    }
                    ctx.restore();

                } else if (this.dripping && dist < this.inkAmount * 2 && random() < 0.05) {
                    this._drops.push(new Drop(
                        this.x,
                        this.y,
                        (this.size + this.inkAmount) * 0.5 * random(0.25, 0.1),
                        this.color,
                        this._strokeId
                    ));
                }
            }

            if (this._drops.length) {
                var drops  = this._drops,
                    drop,
                    sizeSq = this.size * this.size;

                for (i = 0, len = drops.length; i < len; i++) {
                    drop = drops[i];
                    drop.update(this);

                    dx = this.x - drop.x;
                    dy = this.y - drop.y;

                    if (
                        (sizeSq > dx * dx + dy * dy && this._strokeId !== drop.strokeId) ||
                        drop.life <= 0
                    ) {
                        drops.splice(i, 1);
                        len--;
                        i--;
                    } else {
                        drop.draw(ctx);
                    }
                }
            }
        },

        removeDrops: function() {
            this._drops.length = 0;
        },

        _tipReset: function() {
            var tip = this._tip = [],
                rad = this.size * 0.5,
                x0, y0, a0, x1, y1, a1, cv, sv,
                i, len;

            a1  = random(Math.PI * 2);
            len = rad * rad * Math.PI / this.inkAmount | 0;
            if (len < 1) len = 1;

            for (i = 0; i < len; i++) {
                x0 = random(rad);
                y0 = x0 * 0.5;
                a0 = random(Math.PI * 2);
                x1 = x0 * Math.sin(a0);
                y1 = y0 * Math.cos(a0);
                cv = Math.cos(a1);
                sv = Math.sin(a1);

                tip.push(new Hair(
                    this.x + x1 * cv - y1 * sv,
                    this.y + x1 * sv + y1 * cv,
                    this.inkAmount,
                    this.color
                ));
            }
        }
    };


    /**
     * Hair
     */
    function Hair(x, y, inkAmount, color) {
        this.x = x || 0;
        this.y = y || 0;
        this.inkAmount = inkAmount;
        this.color = color;

        this._width = this.inkAmount;
        this._latestPos = { x: this.x, y: this.y };
    }

    Hair.prototype = {
        update: function(offsetX, offsetY, offsetLength) {
            this._latestPos.x = this.x;
            this._latestPos.y = this.y;
            this.x += offsetX;
            this.y += offsetY;

            var per = offsetLength ? this.inkAmount / offsetLength : 0;
            if      (per > 1) per = 1;
            else if (per < 0) per = 0;

            this._width = this.inkAmount * per;
        },

        draw: function(ctx) {
            ctx.save();
            ctx.lineCap = ctx.lineJoin = 'round';
            line(ctx, this._latestPos, this, this.color, this._width);
            ctx.restore();
        }
    };


    /**
     * Drop
     */
    function Drop(x, y, size, color, strokeId) {
        this.x = x || 0;
        this.y = y || 0;
        this.size = size;
        this.color = color;
        this.strokeId = strokeId;

        this.life = this.size * 1.5;
        this._latestPos = { x: this.x, y: this.y };
    }

    Drop.prototype = {
        _xrate: 0,

        update: function() {
            if (random() < 0.03) {
                this._xrate += random(0.03, - 0.03);
            } else if (random() < 0.1) {
                this._xrate *= 0.003;
            }

            this._latestPos.x = this.x;
            this._latestPos.y = this.y;
            this.x += this.life * this._xrate;
            this.y += random(this.life * 0.5);

            this.life -= random(0.05, 0.01);
        },

        draw: function(ctx) {
            ctx.save();
            ctx.lineCap = ctx.lineJoin = 'round';
            line(ctx, this._latestPos, this, this.color, this.size + this.life * 0.3);
            ctx.restore();
        }
    };


    // Draw Helpers

    function line(ctx, p1, p2, color, lineWidth) {
        ctx.strokeStyle = color;
        ctx.lineWidth   = lineWidth;
        ctx.beginPath();
        ctx.moveTo(p1.x, p1.y);
        ctx.lineTo(p2.x, p2.y);
        ctx.stroke();
    }

    function dot(ctx, x, y, color, size) {
        ctx.fillStyle = color;
        ctx.beginPath();
        ctx.arc(x, y, size * 0.5, 0, Math.PI * 2, false);
        ctx.fill();
    }

    return Brush;

})();


// Helpers

function randomColor() {
    var r = random(256) | 0,
        g = random(256) | 0,
        b = random(256) | 0;
    return 'rgb(' + r + ',' + g + ',' + b + ')';
}

function random(max, min) {
    if (typeof max !== 'number') {
        return Math.random();
    } else if (typeof min !== 'number') {
        min = 0;
    }
    return Math.random() * (max - min) + min;
}


// Initialize

(function() {
  
    // Vars

    var canvas, context,
        centerX, centerY,
        mouseX = 0, mouseY = 0, isMouseDown = false, clientX = 0, clientY = 0,
        brush,
        gui, control, guiColorCtr, guiSizeCtr, guiIsRandColorCtr;

    // Event Listeners

    drawer = document.getElementById('drawerContainer').offsetWidth;

    function resize(e) {
        canvas.width  = drawer;
        canvas.height = window.innerHeight;
        centerX = canvas.width * 0.5;
        centerY = canvas.height * 0.5;
        context = canvas.getContext('2d');
        context.fillStyle = "#9ea7b8";
        control.clear();
    }

    function mouseMove(e) {
        mouseX = e.offsetX;
        mouseY = e.offsetY;
    }

    function mouseDown(e) {
        drawer = document.getElementById('message').style.display = 'none'; 
        mouseX = e.offsetX;
        mouseY = e.offsetY;
        if (control.isRandomColor) {
            brush.color = randomColor();
            guiColorCtr.updateDisplay();
        }
        if (control.isRandomSize) {
            brush.size = random(51, 5) | 0;
            guiSizeCtr.updateDisplay();
        }
        brush.startStroke(mouseX, mouseY);
    }

    function mouseUp(e) {
        brush.endStroke();
    }

    // function touchMove(e){
    //     clientX = e.offsetX;
    //     clientY = e.offsetY;
    // }

    // function touchDown(e){
    //     drawer = document.getElementById('message').style.display = 'none'; 
    //     clientX = e.offsetX;
    //     clientY = e.offsetY;
    //     if (control.isRandomColor) {
    //         brush.color = randomColor();
    //         guiColorCtr.updateDisplay();
    //     }
    //     if (control.isRandomSize) {
    //         brush.size = random(51, 5) | 0;
    //         guiSizeCtr.updateDisplay();
    //     }
    //     brush.startStroke(clientX, clientY);
    // }

    // function touchUp(e){
    //     brush.endStroke();
    // }

    var start = function(e) {
        ctx.beginPath();
        x = e.changedTouches[0].pageX;
        y = e.changedTouches[0].pageY-44;
        ctx.moveTo(x,y);
    };
    var move = function(e) {
        e.preventDefault();
        x = e.changedTouches[0].pageX;
        y = e.changedTouches[0].pageY-44;
        ctx.lineTo(x,y);
        ctx.stroke();
    };

    // GUI Control

    control = {
        isRandomColor: true,
        isRandomSize:  false,
        clear: function(e) {
            context.clearRect(0, 0, canvas.width, canvas.height);
            brush.removeDrops();
        }
    };


    // Init

    canvas = document.getElementById('c');
  
    brush = new Brush(centerX, centerY, {
        color: randomColor()
    });

    window.addEventListener('resize', resize, false);
    resize(null);

    canvas.addEventListener('mousemove', mouseMove, false);
    canvas.addEventListener('mousedown', mouseDown, false);
    canvas.addEventListener('mouseout', mouseUp, false);
    canvas.addEventListener('mouseup', mouseUp, false);

    // canvas.addEventListener("touchstart", touchMove, false);
    // canvas.addEventListener("touchdown", touchDown, false);
    // canvas.addEventListener("touchout", touchUp, false);
    // canvas.addEventListener("touchup", touchUp, false);

    canvas.addEventListener('touchstart', start, false);
    canvas.addEventListener('touchmove', move, false);
    
    
    // GUI
  
    gui = new dat.GUI();
    guiColorCtr = gui.addColor(brush, 'color').name('Couleur').onChange(function() {
        control.isRandomColor = false;
        guiIsRandColorCtr.updateDisplay();
    });
    guiSizeCtr = gui.add(brush, 'size', 5, 50).name('Taille');
    gui.add(brush, 'inkAmount', 1, 30).name('Montant d\'encre');
    gui.add(brush, 'splashing').name('Eclaboussure');
    gui.add(brush, 'dripping').name('Egoutement');
    guiIsRandColorCtr = gui.add(control, 'isRandomColor').name('Couleur aléatoire');
    gui.add(control, 'isRandomSize').name('Taille Aléatoire');
    gui.add(control, 'clear').name('Nettoyer');
    gui.close();


    // Start Update

    var loop = function() {
        brush.render(context, mouseX, mouseY);
        requestAnimationFrame(loop);
    };
    loop();

})();

// SCREENSHOT GRAFF
$(document).ready(function() {
    var capture = {};
    var target = $('#c');
    $('#share_button').click(function(){
        html2canvas(target, {
            onrendered: function(canvas) {
                setTimeout(function(){
                            document.body.appendChild(canvas);
                }, 5000);
                capture.img = canvas.toDataURL( "image/png" );
                capture.data = { 'image' : capture.img };
                $.ajax({
                url: "/ajax",
                data: capture.data,
                type: 'post',
                success: function(imgNumb) {
                    // console.log("Saved");
                    // console.log(imgNumb);
                    // console.log(cree);
                    window.location.href = 'http://bicravart.com/fbshare/graff-'+imgNumb+'';
                    // nameUrl(imgNumb);
                }
                });
            }
        });
    });
    //FB SHARE
    // function nameUrl(imgNumb) {
    // // $('#share_button').click(function(){

    //     // console.log(imgNumb);
    //     // e.preventDefault();
    //     var lien = 'http://bicravart.com/fbshare/graff-'+imgNumb+'';
    //     FB.ui({
    //         method: 'share',
    //         display: 'popup',
    //         href: lien
    //     }, function(response){});
    //     console.log(lien);
    // };

    // $.ajaxSetup({
    //     cache: true
    // });
    // $.getScript('//connect.facebook.net/fr_FR/all.js', function() {
    //     FB.init({
    //         appId: '696716717101760',
    //     });
    //     $('#loginbutton,#feedbutton').removeAttr('disabled');
    //     FB.getLoginStatus(function() {
    //         console.log('Status updated!');
    //     });
    // });
});

// CONTEUR DE CLIQUES SORTANTS
$(document).ready(function() {
    $('.fbLink').click(function(){
        $.ajax({
            type: "POST",
            url: "compteur.php",
            data: clicks,
            success: function(clicks)
            {
                console.log('Il y à eu '+clicks+' clicks.');
            }                 
        });
    });
    $('.instagramLink').click(function(){
        nbinstaclic++;
        console.log('Nombre clicks Instagram : '+nbinstaclic);
    });
    $('.partage').click(function(){
        nbshareclic++;
        console.log('Nombre clicks partage : '+nbshareclic);
    });
});

// ANALITYCS
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-64742742-1', 'auto');
ga('send', 'pageview');

