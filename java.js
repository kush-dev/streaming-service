var watchNowButton = document.getElementById('cta');
watchNowButton.addEventListener('click', function(event) {
    event.preventDefault();

    // Replace the button's HTML with the Video.js player
    watchNowButton.outerHTML = '<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"><source src="https://sbbrisk.com/118ctoexkv0z.html" type="video/mp4"></video>';

    // Initialize the Video.js player
    videojs('my-video');
});