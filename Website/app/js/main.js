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
                player1.seekTo(1);        // Start the preloading and wait a state change event
                // event.target.playVideo();
                // player1.playVideo();
                player1.addEventListener('onStateChange',function(){});
            },
            onStateChange: function(){
                console.log('Player1 Change');
                player1.playVideo();
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
                player2.seekTo(1);        // Start the preloading and wait a state change event
                // event.target.playVideo();
                // player1.playVideo();
                player2.addEventListener('onStateChange',function(){});
            },
            onStateChange: function(){
                console.log('Player2 Change');
                player2.playVideo();
            }
        }  
    });
}


function onPlayer1StateChange(newState) {
   console.log("Player1's new state: " + newState);
   if(newState == 3)
   {
        player1.pauseVideo()
   }
}
function onPlayer2StateChange(newState) {
   console.log("Player2's new state: " + newState);
   if(newState == 3)
   {
        player1.pauseVideo()
   }
}

// var player1Ready = false;
// var player2Ready = false;
// var preloading1 = false;
// var preloading2 = false;

// function onPlayer1Ready(event) {
//     player.setPlaybackQuality('hd1080'); 
//     player1Ready = true;
//     preloading1 = true;       // Flag the player 1 preloading
//     player1.mute();           // Mute the player 1
//     player1.seekTo(1);        // Start the preloading and wait a state change event
// }

// function onPlayer2Ready(event) {
//     player.setPlaybackQuality('hd1080'); 
//     player2Ready = true;      // The foreground video player is not preloaded here
//     preloading1 = true;       // Flag the player 2 preloading
//     player2.mute();           // Mute the player 2
//     player2.seekTo(1);        // Start the preloading and wait a state change event
// }

// function onPlayer1StateChange(event) 
// {
//     player1.playVideo();
// }

// function onPlayer2StateChange(event) 
// {
//     player2.playVideo();
// }

// function onPlayer1Ready(event) { 
//     console.log('Ready: 1');
//     player1.setPlaybackQuality('hd1080');
//     // preloading1 = true;
//     player1.seekTo(1);        // Start the preloading and wait a state change event
//     // event.target.playVideo();
//     player1.playVideo();
// } 

// INTERACTIVE VIDEO 
$(document).ready(function() {
    $(document).on('keydown', function(e) {
        if(e.keyCode == 88) {
            $('#player2, .navBar, .baseline').hide();
        }
    })
    .on('keyup', function(e){
        if(e.keyCode == 88) {
            $('#player2, .navBar').show();
        }
    });

    var videoHeight = $('.videoHeight').height();
    $(window).scroll(function() {
        if ($(this).scrollTop() > videoHeight) {
            $('.navBar').css({'background': 'yellow'});
        }else{
            $('.navBar').css({'background': 'transparent'});    
        }
    });


    //FB SHARE
    // function nameUrl(imgNumb) {
    // // $('#share_button').click(function(){

    //     // console.log(imgNumb);
    //     // e.preventDefault();
    //     var lien = 'http://bicravart.com/';
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

$(document).ready(function() {
    $('#formContact').submit(function(event) {

        var formData = {
            // 'functionName' : 'contact',
            'name' : $('#formName').val(),
            'email' : $("#formEmail").val(),
            'tel' : $("#formTel").val(),
            'subject' : $("#formSubject").val(),
            'message' : $("#formMessage").val()
        };

        console.log(formData);

        $.ajax({
            url: "includes/functions",
            type: "POST",
            data: {action: 'contact', contactData: formData},
            dataType: 'json',
            encode: true
        })
        .done(function(data){
            console.log(formData);
            console.log(data);

            if(!data.success){
                console.log('EMAIL SEND');
            }else{
                console.log('EMAIL NOT SEND');
            }
        });
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

