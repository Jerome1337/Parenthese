$(document).foundation();

// YOUTUBE API
var tag = document.createElement('script');  
tag.src = "https://www.youtube.com/iframe_api";  
var firstScriptTag = document.getElementsByTagName('script')[0];  
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);  
var player1;
var player2;
function onYouTubeIframeAPIReady() {  
    player1 = new YT.Player('player1', {  
        height: '1280',  
        width: '720',
        videoId: 'RAzzv6Ks9nc',
        playerVars: {
            rel: '0',
            showinfo: '0',
            iv_load_policy: '3',
            showinfo: '0',
            controls: '0',
            modestbranding: '1',
            loop: '1',
            cc_load_policy: '1',
            fs: '0',
            showsearch: '0',
            enablejsapi: '1',
        },
        events: {  
            // 'onReady': onPlayer1Ready,
            // 'onStateChange': onPlayer1StateChange
            onReady: function(){
                console.log('Ready: 1');
                player1.setPlaybackQuality('hd720');
                // preloading1 = true;
                // player1.seekTo(1);        // Start the preloading and wait a state change event
                // event.target.playVideo();
                // player1.playVideo();
                player1.addEventListener('onStateChange',function(){});
            },
            onStateChange: function(){
                console.log('Player1 Change');
                // player1.playVideo();
                // player1.addEventListener('onChange',function(){});
                // setTimeout(mafonction, 5000);
            }
        }  
    });
    player2 = new YT.Player('player2', {  
        height: '1280',  
        width: '720',
        videoId: 'FAeAp9MzPtk',
        playerVars: {
            rel: '0',
            showinfo: '0',
            iv_load_policy: '3',
            showinfo: '0',
            controls: '0',
            modestbranding: '1',
            loop: '1',
            cc_load_policy: '1',
            fs: '0',
            showsearch: '0',
            enablejsapi: '1',
        },
        events: {  
            // 'onReady': onPlayer2Ready,
            // 'onStateChange': onPlayer2StateChange
            onReady: function(){
                console.log('Ready: 2');
                player2.setPlaybackQuality('hd720');
                // preloading1 = true;
                // player2.seekTo(1);        // Start the preloading and wait a state change event
                // event.target.playVideo();
                // player1.playVideo();
                player2.addEventListener('onStateChange',function(){});
            },
            onStateChange: function(){
                console.log('Player2 Change');
                // player2.playVideo();
            }
        }  
    });
}

$(document).ready(function() {

    // INTERACTIVE VIDEO 
    $(document).on('keydown', function(e) {
        if(e.keyCode == 88) {
            $('#player2, .baseline').hide();
        }
    }).on('keyup', function(e){
        if(e.keyCode == 88) {
            $('#player2').show();
        }
    });

    //CONTACT FORM ACTION
    $('#formContact').submit(function(e) {
        e.preventDefault();
        var formData = {
            'action' : 'contact',
            'name' : $('#formName').val(),
            'email' : $("#formEmail").val(),
            'tel' : $("#formTel").val(),
            'subject' : $("#formSubject").val(),
            'message' : $("#formMessage").val()
        };

        // console.log(formData);

        $.ajax({
            url: "includes/functions",
            type: "POST",
            data: formData,
            dataType: 'json',
            encode: true
        })
        .done(function(data){
            // console.log(formData);
            // console.log(data);

            if(data.success){
                // console.log('EMAIL SEND');
            }else{
                // console.log('EMAIL NOT SEND');
            }
        });
    });

    //ADD GRAFFEUR ACTION
    $('#formGraffeur').submit(function(event){
        var formData = {
            'action' : 'graffeur',
            'name' : $('#formName').val(),
            'age' : $('#formAge').val(),
            'tel' : $("#formTel").val(),
            'email' : $("#formEmail").val(),
            'website' : $("#formWebsite").val(),
            'competences' : $("#formComp").val(),
            'salaire' : $("#formSal").val()
        };
        // console.log(formData);

        $.ajax({
            url: "includes/functions",
            type: "POST",
            data: formData,
            dataType: 'json',
            encode: true
        })
        .done(function(data){
            // console.log(formData);
            // console.log(data);

            if(data.success){
                // console.log('GRAFFEUR ADDED');
            }else{
                // console.log('FAIL');
            }
        });
        event.preventDefault();
    });

    //ADD + EMAIL DEVIS ACTION
    $('#formDevis').submit(function(event){
        var formData = {
            'action' : 'devis',
            'name' : $('#formName').val(),
            'email' : $("#formEmail").val(),
            'date' : $("#formDate").val(),
            'lieu' : $("#formLieu").val(),
            'desc' : $("#formDesc").val()
        };
        $.ajax({
            url: "includes/functions",
            type: "POST",
            data: formData,
            dataType: 'json',
            encode: true
        })
        .done(function(data){
            // console.log(formData);
            // console.log(data);

            if(data.success){
                // console.log('EMAIL SEND');
            }else{
                // console.log('EMAIL NOT SEND');
            }
        });
        event.preventDefault();
    });

    //CONTACT PAGE
    $('.email').append('<a href=\"mailto:contact@bicravart.com\">contact@bicravart.com</a>');
    $('#telNumb').append('06 04 05 09 84');
    $('#entrepriseContact, .coordoneesSec').hide();
    $('.artistPart').addClass('active');

    $('.artistPart').click(function(){
        $('#entrepriseContact, .coordoneesSec').hide();
        $('#artistContact').show();
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('.entreprisePart').click(function(){
        $('#artistContact, .coordoneesSec').hide();
        $('#entrepriseContact').show();
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('.coordoneesPart').click(function(){
        $('#artistContact, #entrepriseContact').hide();
        $('.coordoneesSec').show();
        $(this).addClass('active').siblings().removeClass('active');
    });

    $("#select").change(function() {
        var val = $(this).val();
        if(val === "artist") {
            $('#entrepriseContact, .coordoneesSec').hide();
            $('#artistContact').show();
        }
        else if(val === "entreprise") {
            $('#artistContact, .coordoneesSec').hide();
            $('#entrepriseContact').show();
        }
        else{
            $('#artistContact, #entrepriseContact').hide();
            $('.coordoneesSec').show();
        }
    });

    var onMapMouseleaveHandler = function (event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }

    var onMapClickHandler = function (event) {
        var that = $(this);
        that.off('click', onMapClickHandler);
        that.find('iframe').css("pointer-events", "auto");
        that.on('mouseleave', onMapMouseleaveHandler);
    }
    $('.gmap').on('click', onMapClickHandler);


    //CONTACT ENTREPRISE ACTION
    $('#entrepriseContact').submit(function(event){
        var formData = {
            'action' : 'contactEntreprise',
            'name' : $('#formEntrepriseName').val(),
            'email' : $("#formEntrepriseEmail").val(),
            'tel' : $("#formEntrepriseTel").val(),
            'message' : $("#formEntrepriseMessage").val()
        };
        // console.log(formData);

        $.ajax({
            url: "includes/functions",
            type: "POST",
            data: formData,
            dataType: 'json',
            encode: true
        })
        .done(function(data){
            // console.log(formData);
            // console.log(data);

            if(data.success){
                // console.log('EMAIL SEND');
            }else{
                // console.log('EMAIL NOT SEND');
            }
        });
        event.preventDefault();
    });

    $(".telInput").keypress(function(e) {
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            $("#errmsg").html("Digits Only").show().fadeOut("slow");
            return false;
        }
    });

    //CONTACT ARTISTS ACTION
    $('#artistContact').submit(function(event){

        var isFormValid = true;
        $(".required").each(function(){
            if ($.trim($(this).val()).length == 0){
                console.log('formulaire non valide');
                $(this).addClass('emptyField');
                isFormValid = false;        
            }
            else{
                console.log('formulaire valide');
            }
        });
        if(!isFormValid){
            console.log('tg');
        }
        else{
            $('#formConfirm').foundation('reveal', 'open');
        }
        event.preventDefault();
    });
    $('#sendForm').click(function(event){
        $(this).data('clicked', true);
        
        if($('#sendForm').data('clicked')){
            var formData = {
                'action' : 'contactArtist',
                'name' : $('#formArtistName').val(),
                'email' : $("#formArtistEmail").val(),
                'tel' : $("#formArtistTel").val(),
                'message' : $("#formArtistMessage").val()
            };
            // console.log(formData);
            $.ajax({
                url: "includes/functions",
                type: "POST",
                data: formData,
                dataType: 'json',
                encode: true
            })
            .done(function(data){
                // console.log(formData);
                // console.log(data);

                if(data.success){
                    // console.log('EMAIL SEND');
                }else{
                    // console.log('EMAIL NOT SEND');
                }
            $('#formArtistName, #formArtistEmail, #formArtistTel, #formArtistMessage').val('');
            });
        }else{
            // console.log('essaie encore bitch');
        }
        event.preventDefault();
    });
});

// ANALITYCS
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-64742742-1', 'auto');
ga('send', 'pageview');

