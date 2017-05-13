
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


// TEST Tween ScrollMagic Tween Example
TweenMax.to(".q2", 6, {left:700});

// $(function() {
//   var controller = new ScrollMagic.Controller();

//   var blockTween = new TweenMax.to('#block', 1.5, {
//     backgroundColor: 'red'
//   });

//   var containerScene = new ScrollMagic.Scene({
//       triggerElement: '#containerTest'
//     })
//     .setTween(blockTween)
//     .addIndicators()
//     .addTo(controller);
// });

// $(function() {

// /* Window height function > Responsive Web Design R. Villalobos - */ 
//   var wheight = $(window).height(); //get height of the window

//   $('.fullheight').css('height', wheight);

//   $(window).resize(function() {
//     var wheight = $(window).height(); //get height of the window
//     $('.fullheight').css('height', wheight);
//   }); //on resize

//   console.log(wheight);

// //set up ScrollMagic
//   var controller = new ScrollMagic({
//     globalSceneOptions: {
//       triggerHook: "onLeave"  // see ScrollMagic doc
//     }
//   });

//   //Student quote animations
//   											//  control element by blockquote element
//   var quotetween = TweenMax.staggerFromTo('#grp-photo content blockquote', 1, 
//   	{ opacity: 0, scale: 0 },
//     { delay: 1, opacity: 1, scale: 1,
//         ease: Back.easeOut}); // Tweenmax has options

//   var scene = new ScrollScene({
//     triggerElement: '#grp-photo',
//     //offset: -topoffset-1
//   }).setTween(quotetween)
//     .addTo(controller);

// }); //on load

