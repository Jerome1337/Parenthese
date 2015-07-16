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
        console.log(formData);

        $.ajax({
            url: "includes/functions",
            type: "POST",
            data: formData,
            dataType: 'json',
            encode: true
        })
        .done(function(data){
            console.log(formData);
            console.log(data);

            if(data.success){
                console.log('GRAFFEUR ADDED');
            }else{
                console.log('FAIL');
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
            console.log(formData);
            console.log(data);

            if(data.success){
                console.log('EMAIL SEND');
            }else{
                console.log('EMAIL NOT SEND');
            }
        });
        event.preventDefault();
    });

    //FB SHARE
    $('#share_button').click(function(event){
        event.preventDefault();
        var lien = 'http://bicravart.com/';
        FB.ui({
            method: 'share',
            display: 'popup',
            href: lien
        }, function(response){});
        // console.log(lien);
    });
    $.ajaxSetup({
        cache: true
    });
    $.getScript('//connect.facebook.net/fr_FR/all.js', function() {
        FB.init({
            appId: '696716717101760',
        });
        FB.getLoginStatus(function() {
            // console.log('Status updated!');
        });
    });
});

// ANALITYCS
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-64742742-1', 'auto');
ga('send', 'pageview');

