$(".menu-item").click(function() {
    $(".sub-menu").toggleClass("d-block");
});

$('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    nav: true,
})

// Add click event to the play button
$(".play-btn").on("click", function () {
    // Hide the video-image div
    $(".video-image").hide();

    // Show the video element
    $(".w-100").show();

    // Play the video
    var video = document.getElementById("VideoWorker-0");
    video.play();

    // Remove the click event after the first click
    $(this).off("click");
});

// Add click event to the play button
$(".play-carousel").on("click", function () {
    // Find the parent video-image-1 div and remove it
    $(this).closest('.video-image-1').remove();

    // Play the video using jQuery
    var video = $(this).siblings('video')[0];
    video.play();
});