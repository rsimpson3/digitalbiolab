/*** First Test   ***/
TweenMax.to(".logo", 6, {left:600});

/*** Second Test   ***/
$(function() {
  var controller = new ScrollMagic.Controller();

  var blockTween = new TweenMax.to('#block', 1.5, {
    backgroundColor: 'red'
  });

  var containerScene = new ScrollMagic.Scene({
      triggerElement: '#container'
    })
    .setTween(blockTween)
    // .addIndicators()
    .addTo(controller);
});