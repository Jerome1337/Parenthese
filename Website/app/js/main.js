$(document).foundation();

function isMobile() {
return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

if (isMobile()) {
    $('#interactivKey, #mouseIcon').hide();

    $('.transparentNav').css({"background-color":"#2c2c2c"});
    $('.top-bar-section').css({"background-color":"#2c2c2c"});
    $('.top-bar-section ul').css({"background-color":"#2c2c2c"});
    $('.top-bar-section ul li').css({"background-color":"#2c2c2c"});
    $('.top-bar-section ul li a').css({"background-color":"#2c2c2c"});
}

if (!isMobile()) {
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
            videoId: '8C_v4Lzm4Ik',
            playerVars: {
                "rel": 0,
                "showinfo": 0,
                "iv_load_policy": 3,
                "showinfo": 0,
                "controls": 0,
                "modestbranding": 1,
                "loop": 1,
                "cc_load_policy": 1,
                "fs": 0,
                "showsearch": 0,
                "enablejsapi": 1,
                "autoplay": 0,
                "disablekb": 0
            },
            events: {
                'onReady': onPlayer1Ready,
                'onStateChange': onPlayer1StateChange
            }  
        });
        player2 = new YT.Player('player2', {  
            height: '1280',  
            width: '720',
            videoId: 'AUxha1H43-4',
            playerVars: {
                "rel": 0,
                "showinfo": 0,
                "iv_load_policy": 3,
                "showinfo": 0,
                "controls": 0,
                "modestbranding": 1,
                "loop": 1,
                "cc_load_policy": 1,
                "fs": 0,
                "showsearch": 0,
                "enablejsapi": 1,
                "autoplay": 0,
                "disablekb": 0
            },
            events: {  
                'onReady': onPlayer2Ready,
                'onStateChange': onPlayer2StateChange
            }  
        });
    }

    var player1Ready = false;
    var player2Ready = false;

    function onPlayer1Ready(event){
        player1Ready = true;
        preloading1 = true;       // Flag the player 1 preloading
        // player1.setPlaybackQuality('hd720'); 
        player1.mute();           // Mute the player 1
        // $( "#player1" ).hide();   // Hide it
        player1.seekTo(1);        // Start the preloading and wait a state change event
        // console.log('Player1 Ready ' + player1Ready + '');
        // console.log('Player1 LOADING ' + preloading1 + '');
    }

    function onPlayer2Ready(event) {
        player2Ready = true;      // The foreground video player is not preloaded here
        // console.log('Player2 Ready ' + player2Ready + '');
    }

    function onPlayer1StateChange(event){
        if (event.data == YT.PlayerState.PLAYING ) {
            if(preloading1)
            {
                // prompt("Background ready");     // For testing
                // console.log('PLAYER 1 LOADED');
                player1.pauseVideo();           // Pause the video
                player1.seekTo(0);              // Rewind
                player1.unMute();           // Comment this after test
                // $( "#player1" ).show();         // Show the player
                preloading1 = false;

                player2Ready = true;
                preloading2 = true;             // Flag for foreground video preloading
                // player1.setPlaybackQuality('hd720'); 
                player2.mute();
                //$( "#player2" ).hide();
                player2.seekTo(1);              // Start buffering and wait the event

                // console.log('Player2 Ready ' + player2Ready + '');
                // console.log('Player2 LOADING ' + preloading2 + '');
            }
            else
                player2.playVideo();            // If not preloading link the 2 players PLAY events
                // console.log('PLAYER 2 PLAY');
        }

        // else if (event.data == YT.PlayerState.PAUSED ) {
        //     if(!preloading1)
        //         player2.pauseVideo();           // If not preloading link the 2 players PAUSE events
                // console.log('PLAYER 2 PAUSED');

        // }
        // else if (event.data == YT.PlayerState.BUFFERING ) {
        //     if(!preloading1)
        //     {
        //         player2.pauseVideo();           // If not preloading link the 2 players BUFFERING events
        //         console.log('PLAYER 2 BUFFERING');

        //     }
        // }
        // else if (event.data == YT.PlayerState.CUED ) {
        //     if(!preloading1)
        //         player2.pauseVideo();           // If not preloading link the 2 players CUEING events
        //         console.log('PLAYER 2 CUED');

        // }
        // else if (event.data == YT.PlayerState.ENDED ) {
        //     player2.stopVideo();                // If not preloading link the 2 players ENDING events
        //         console.log('PLAYER 2 ENDED');

        // }
    }

    var videosPlaying = false;

    function onPlayer2StateChange(event){
        if (event.data == YT.PlayerState.PLAYING ) {
            if(preloading2)
            {
                // prompt("Foreground ready");
                // console.log('PLAYER 2 LOADED');
                player2.pauseVideo();           // Pause the video
                player2.seekTo(0);              // Rewind
                player2.unMute();               // Unmute
                preloading2 = false;

                $( "#player2" ).show(50, function() {
                    player2.playVideo();
                    videosPlaying = true;
                    $('#videosOverlay').hide();
                    $('.baseline').hide();
                    // console.log('PLAYER 2 PLAYING');
                });
            }
            else
                player1.playVideo();
                // console.log('PLAYER 1 PLAYING');
        }
        else if (event.data == YT.PlayerState.PAUSED ) {
            if(/*!preloading1 &&*/ !preloading2)
                player1.pauseVideo();
        }
        else if (event.data == YT.PlayerState.BUFFERING ) {
            if(!preloading2)
            {
                player1.pauseVideo();
                //player1.seekTo(... // Correct the offset here
            }
        }
        else if (event.data == YT.PlayerState.CUED ) {
            if(!preloading2)
                player1.pauseVideo();
        }
        else if (event.data == YT.PlayerState.ENDED ) {
            player1.playVideo();
            player2.playVideo();
        }
    }

    $(document).ready(function() {

        // INTERACTIVE VIDEO 
        $(document).on('keydown', function(e) {
            if(e.keyCode == 78) {
                $('#player2').hide();
            }
        }).on('keyup', function(e){
            if(e.keyCode == 78) {
                $('#player2').show();
            }
        });

        $('.js-video').click(function(){
            if(videosPlaying == true){
                videosPlaying = false;
                player1.pauseVideo();
                player2.pauseVideo();
            }else{
                videosPlaying = true;
                player1.playVideo();
                player2.playVideo();
            }
        });

        if ($('body.transitionNav').length > 0)
        {
            var nav = $(".explainContainer");
            var $w = $(window).scroll(function(){
                if ( $w.scrollTop() > nav.offset().top ) {   
                    $('.transparentNav').css({"background-color":"#2c2c2c"});
                    $('.top-bar-section').css({"background-color":"#2c2c2c"});
                    $('.top-bar-section ul').css({"background-color":"#2c2c2c"});
                    $('.top-bar-section ul li').css({"background-color":"#2c2c2c"});
                    $('.top-bar-section ul li a').css({"background-color":"#2c2c2c"});
                } else {
                    $('.transparentNav').css({"background-color":"transparent"});
                    $('.top-bar-section').css({"background-color":"transparent"});
                    $('.top-bar-section ul').css({"background-color":"transparent"});
                    $('.top-bar-section ul li').css({"background-color":"transparent"});
                    $('.top-bar-section ul li a').css({"background-color":"transparent"});
                }
            });
        }
    });
}

$(document).ready(function() {

    // $('#interactivKey').hide();

    //ADD GRAFFEUR ACTION
    $('#formGraffeur').submit(function(event){

        var isFormValid = true;
        $(".graffeurChamp").each(function(){
            if ($.trim($(this).val()).length == 0){
                // console.log('formulaire non valide');
                $(this).addClass('emptyField');
                isFormValid = false;        
            }
            else{
                // console.log('formulaire valide');
            }
        });
        if(!isFormValid){
            // console.log('tg');
        }
        else{
            $('#formConfirm').foundation('reveal', 'open');
        }
        event.preventDefault();
    });
    $('.sendFormartists').click(function(event){
        $(this).data('clicked', true);
        
        if($('.sendFormartists').data('clicked')){
            var formData = {
                'action' : 'graffeur',
                'name' : $('.formName').val(),
                'age' : $('.formAge').val(),
                'tel' : $(".formTel").val(),
                'email' : $(".formEmail").val(),
                'website' : $(".formWebsite").val(),
                'competences' : $(".formComp").val(),
                'salaire' : $(".formSal").val()
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
                $('.formName, .formAge, .formTel, .formEmail, .formComp, .formSal').val('');
                $('.formWebsite').val('http://');
            });
        }else{
            // console.log('essaie encore bitch');
        }
        event.preventDefault();
    });

    //ADD + EMAIL DEVIS ACTION
    $('#formDevis').submit(function(event){

        var isFormValid = true;
        $(".devisChamp").each(function(){
            if ($.trim($(this).val()).length == 0){
                // console.log('formulaire non valide');
                $(this).addClass('emptyField');
                isFormValid = false;        
            }
            else{
                // console.log('formulaire valide');
            }
        });
        if(!isFormValid){
            // console.log('tg');
        }
        else{
            $('#formConfirm').foundation('reveal', 'open');
        }
        event.preventDefault();
    });
    $('.sendFormentreprises').click(function(event){
        $(this).data('clicked', true);
        
        if($('.sendFormentreprises').data('clicked')){
            var formData = {
                'action' : 'devis',
                'name' : $('.formName').val(),
                'email' : $(".formEmail").val(),
                'date' : $(".formDate").val(),
                'lieu' : $(".formLieu").val(),
                'desc' : $(".formDesc").val()
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
                $('.devisChamp').val('');
            });
        }else{
            // console.log('essaie encore bitch');
        }
        event.preventDefault();
    });

    //CONTACT PAGE
    $('.email').append('<a href=\"mailto:contact@bicravart.com\">contact@bicravart.com</a>');
    $('#telNumb').append('<a href=\"tel:06 04 05 09 84\">06 04 05 09 84</a>');
    $('#entrepriseContact, .coordoneesSec').hide();
    $('.artistPart p').addClass('active');

    $('.artistPart').click(function(){
        $('#entrepriseContact, .coordoneesSec').hide();
        $('#artistContact').show();
        $('.artistPart p').addClass('active')
        $('.entreprisePart p, .coordoneesPart p').removeClass('active');
    });

    $('.entreprisePart').click(function(){
        $('#artistContact, .coordoneesSec').hide();
        $('#entrepriseContact').show();
        $('.entreprisePart p').addClass('active')
        $('.artistPart p, .coordoneesPart p').removeClass('active');
    });

    $('.coordoneesPart').click(function(){
        $('#artistContact, #entrepriseContact').hide();
        $('.coordoneesSec').show();
        $('.coordoneesPart p').addClass('active')
        $('.artistPart p, .entreprisePart p').removeClass('active');
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

    $('.gmap iframe').css("pointer-events", "none");
    $('.gmap iframe').on('click', function(){
        $(this).css("pointer-events", "auto");
    });

    //CONTACT ENTREPRISE ACTION
    $('#entrepriseContact').submit(function(event){

        var isFormValid = true;
        $(".entrepriseChamp").each(function(){
            if ($.trim($(this).val()).length == 0){
                // console.log('formulaire non valide');
                $(this).addClass('emptyField');
                isFormValid = false;        
            }
            else{
                // console.log('formulaire valide');
                $('#sendForm').removeClass('sendFormcontacta');
            }
        });
        if(!isFormValid){
            // console.log('tg');
        }
        else{
            $('#formConfirm').foundation('reveal', 'open');
        }
        event.preventDefault();
    });
    $('.sendFormcontacte').click(function(event){
        $(this).data('clicked', true);
        
        if($('.sendFormcontacte').data('clicked')){
            var formData = {
                'action' : 'contactEntreprise',
                'name' : $('.formEntrepriseName').val(),
                'email' : $(".formEntrepriseEmail").val(),
                'tel' : $(".formEntrepriseTel").val(),
                'message' : $(".formEntrepriseMessage").val()
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
                $('.formEntrepriseName, .formEntrepriseEmail, .formEntrepriseTel, .formEntrepriseMessage').val('');
                $('#sendForm').addClass('sendFormcontacta');
            });
        }else{
            // console.log('essaie encore bitch');
        }
        event.preventDefault();
    });

    //CONTACT ARTISTS ACTION
    $('#artistContact').submit(function(event){

        var isFormValid = true;
        $(".artistChamp").each(function(){
            if ($.trim($(this).val()).length == 0){
                // console.log('formulaire non valide');
                $(this).addClass('emptyField');
                isFormValid = false;        
            }
            else{
                // console.log('formulaire valide');
                $('#sendForm').removeClass('sendFormcontacte');
            }
        });
        if(!isFormValid){
            // console.log('tg');
        }
        else{
            $('#formConfirm').foundation('reveal', 'open');
        }
        event.preventDefault();
    });
    $('.sendFormcontacta').click(function(event){
        $(this).data('clicked', true);
        
        if($('.sendFormcontacta').data('clicked')){
            var formData = {
                'action' : 'contactArtist',
                'name' : $('.formArtistName').val(),
                'email' : $(".formArtistEmail").val(),
                'tel' : $(".formArtistTel").val(),
                'message' : $(".formArtistMessage").val()
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
            $('.formArtistName, .formArtistEmail, .formArtistTel, .formArtistMessage').val('');
            $('#sendForm').addClass('sendFormcontacte');

            });
        }else{
            // console.log('essaie encore bitch');
        }
        event.preventDefault();
    });
    
    $('#endForm, #changeForm').click(function(){
        $(this).foundation('reveal', 'close');
    });

    // BLOCK NUMBER TEL INPUT
    $(".telInput").keypress(function(e) {
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            $("#errmsg").html("Digits Only").show().fadeOut("slow");
            return false;
        }
    });

    // SCROLL TO
    $('.scrollTo').click(function() {
        $('html, body').animate({scrollTop: $('.artistForm').offset().top}, 750 );
        return false;
    });

});

// ANALITYCS
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-64742742-1', 'auto');
ga('send', 'pageview');