import Matter, { Body, Render } from 'matter-js';
import { gsap } from 'gsap';
import { ScrollTrigger } from "gsap/ScrollTrigger";

function homepage_v2(){

  gsap.registerPlugin(ScrollTrigger);

  // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
  let vh = window.innerHeight * 0.01;
  // Then we set the value in the --vh custom property to the root of the document
  document.documentElement.style.setProperty('--vh', `${vh}px`);
  // We listen to the resize event
  window.addEventListener('resize', () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  });

  const body = document.querySelector('body');
  const hero = document.querySelector('.home-image');
  const ourTeam = document.getElementById('home-copy-segment-our-team');
  const ourFounders = document.getElementById('home-copy-segment-our-founders');
  const ourFocus = document.getElementById('home-copy-segment-our-focus');
  const contact = document.getElementById('home-copy-segment-contact');
  const content = document.getElementById('home-copy-segment-content');
  const staytuned = document.getElementById('home-copy-segment-staytuned');

  function randy(min,max){
    return Math.floor(Math.random() * max) + min
  }

  var resizeTimer;
  window.addEventListener('resize', function(e) {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      window.location.reload();
    }, 250);
  });

  // Function to update the Body class and the segment navigation active class
  function updateBodyClass(seg){
    var currentLink = document.querySelector('a.home-segment-nav-link[href="#'+seg.getAttribute("id")+'"]');
    if ( currentLink ) {
      if ( document.querySelector('.active') ) {
        document.querySelector('.active').classList.remove('active');
      }
      currentLink.classList.add('active');
    }
    //Remove previous segment body class
    for (let i = body.classList.length - 1; i >= 0; i--) {
      const className = body.classList[i];
      if (className.startsWith('currentSegment_')) {
          body.classList.remove(className);
      }
    }
    // Add current segment class name to body
    body.classList.add('currentSegment_' + seg.getAttribute('id'));
  }

  function createEmptySegment(segmentName ){  
    ScrollTrigger.create({
      trigger: segmentName,
      start: "30% 50%",
      end: "100% 50%",
      scroller: ".home-copy",
        onEnter: () => { updateBodyClass(segmentName); },
        onEnterBack: () => { updateBodyClass(segmentName); },
        onLeave: () => {  },
        onLeaveBack: () => {  }
    });
  };

  function createCoinSegment(segmentName, images ){  

    ScrollTrigger.create({
      trigger: segmentName,
      start: "30% 50%",
      end: "100% 50%",
      scroller: ".home-copy",
        onEnter: () => { updateBodyClass(segmentName); reset() },
        onEnterBack: () => { updateBodyClass(segmentName); reset(); },
        onLeave: () => {  },
        onLeaveBack: () => {  }
    });

    function mobdesk(mob, desk){
      var x = window.matchMedia("(orientation: landscape)")
      if ( x.matches ) {
        return desk;
      } else {
        return mob;
      }
    };

    function reset(){
      if ( bodies ) {
        for (var i = 2; i < bodies.length; i++){
          Matter.Body.applyForce( bodies[i], {x: canvasWidth/2, y: canvasHeight}, {x : 0, y: -1 });
        }
      }
    }

    function pushRight(){
      setTimeout( function(){
        if ( bodies ) {
          for (var i = 2; i < bodies.length; i++){
            Matter.Body.applyForce( bodies[i], {x: 0, y: canvasHeight}, {x : 1, y: -.5 });
          }
        }
      }, 2000 );
    };
    window.addEventListener("load", pushRight() );

        
    let canvasWidth = document.querySelector('.home-copy-segment').offsetWidth;
    let canvasHeight = document.querySelector('.home-copy-segment').offsetHeight;

    // module aliases
    var Engine = Matter.Engine, Render = Matter.Render, Runner = Matter.Runner, Bodies = Matter.Bodies, Composite = Matter.Composite;
    // create an engine
    var engine = Engine.create();
    // create a renderer
    var render = Render.create({
        element: segmentName,
        engine: engine,
        options: {
          background: 'transparent',
          wireframes: false,
          width: canvasWidth,
          height: canvasHeight
        }
    });

    var leftWall = Bodies.rectangle( 0, canvasHeight/2, 5, canvasHeight, { isStatic: true, render: { strokeStyle: '#000000' }});
    var rightWall = Bodies.rectangle( canvasWidth, canvasHeight/2, 5, canvasHeight, { isStatic: true, render: { strokeStyle: '#000000' }});
    var ground = Bodies.rectangle( canvasWidth/2, canvasHeight, canvasWidth, 5, { isStatic: true, render: { strokeStyle: '#000000' }} );
    var ceiling = Bodies.rectangle( canvasWidth/2, 0, canvasWidth, 5, { isStatic: true, render: { strokeStyle: '#000000' }} );

    var bodies = [ceiling, ground, leftWall, rightWall];
    for (var i = 0; i < images.length; i++ ){
      var imgSizeFactor; 
      if ( images[i].imgSizeFactor ) { imgSizeFactor = images[i].imgSizeFactor } else { imgSizeFactor = 1 };
      var scaleFactor;
      if ( images[i].scaleFactor ) { scaleFactor = images[i].scaleFactor } else { scaleFactor = 1 };
      var trueimgWidth = images[i].radius * 2;
      var imgWidthFraction = 720 / trueimgWidth ;
      var scaledWidth = canvasWidth / imgWidthFraction;
      var textureScaling = scaledWidth / trueimgWidth;
      // create coins
      bodies.push( 
        Bodies.circle( randy(100,canvasWidth-100), randy(0, canvasHeight/4), scaledWidth/2 * scaleFactor, { 
          // density: .001 * ( trueimgWidth / 220 ),
          mass: randy(20, 30),
          render: { 
            sprite: { 
              texture: images[i].file,
              xScale: imgSizeFactor * textureScaling * scaleFactor,
              yScale: imgSizeFactor * textureScaling * scaleFactor
            } 
          } 
        })
      );
    }
    // add all of the bodies to the world
    Composite.add(engine.world, bodies);
    // run the renderer
    Render.run(render);
    // create runner
    var runner = Runner.create();
    // run the engine
    Runner.run(runner, engine);
  };

  createEmptySegment(hero);

  let nohashpath = document.location.origin + '/';

  createEmptySegment(ourTeam);
  createCoinSegment(ourFounders, [
    {
      file: nohashpath+'wp-content/themes/peak2021/img/home-sprites/ourfounders-Channale-160.png', 
      radius: 80,
      imgSizeFactor: 0.5
    },
    {
      file: nohashpath+'wp-content/themes/peak2021/img/home-sprites/ourfounders-GraphCMS-220.png', 
      radius: 110,
      imgSizeFactor: 0.5
    },
    {
      file: nohashpath+'wp-content/themes/peak2021/img/home-sprites/ourfounders-HelloCustomer-160.png', 
      radius: 80,
      imgSizeFactor: 0.5
    },
    {
      file: nohashpath+'wp-content/themes/peak2021/img/home-sprites/ourfounders-OpenSocial-160.png', 
      radius: 80,
      imgSizeFactor: 0.5
    },
    {
      file: nohashpath+'wp-content/themes/peak2021/img/home-sprites/ourfounders-Stack-220.png', 
      radius: 110,
      imgSizeFactor: 0.5
    },
    {
      file: nohashpath+'wp-content/themes/peak2021/img/home-sprites/ourfounders-StuDocu-160.png', 
      radius: 80,
      imgSizeFactor: 0.5
    },
    {
      file: nohashpath+'wp-content/themes/peak2021/img/home-sprites/ourfounders-Trengo-220.png', 
      radius: 110,
      imgSizeFactor: 0.5,
      scaleFactor: 0.75
    }
  ]);

  createEmptySegment(ourFocus);
  createEmptySegment(contact);
  createEmptySegment(content);
  createEmptySegment(staytuned);

  let downArrows = document.querySelectorAll('.home-copy-segment-next');
  let scrollingContainer = document.querySelector('.home-copy');
  for ( let i = 0; i < downArrows.length; i ++ ){
    console.log(downArrows[i].clientTop);
    downArrows[i].addEventListener( 'click', () => {
      scrollingContainer.scrollTo(0, (downArrows[i].offsetParent.offsetTop + scrollingContainer.clientHeight) );
    } )
  }

  gsap.to( '.logo-clone svg', {
    rotationZ: 360,
    transformOrigin: '50% 50%',
    ease: 'none',
    scrollTrigger: {
      scroller: '.home-copy',
      trigger: '#home-copy-segment-our-founders',
      start: '0% 0%',
      end: '500% 0%',
      scrub: true,
      // markers: true
    } 
  })
  if ( window.matchMedia( '(orientation: portrait)' ).matches ) {
    var shrinkTrigger = {
      scroller: '.home-copy',
      trigger: '#home-copy-segment-our-founders',
      start: '-100% 0%',
      end: '0% 0%',
      toggleActions: "play complete reverse reverse",
      scrub: true
    };
    gsap.fromTo( '.logo-clone', {
      width: '80vw',
      height: '80vw',
      x: '10vw',
      y: '10vw',
    },{
      width: document.querySelector('.peak-branding .peak-logo-svg').clientWidth,
      height: document.querySelector('.peak-branding .peak-logo-svg').clientWidth,
      x: '1rem',
      y: '1rem',
      scrollTrigger: shrinkTrigger
    });
    gsap.to( '.logo-clone .peak-logo-svg g', {
      transformOrigin: '50% 50%',
      rotationZ: 360,
      scrollTrigger: shrinkTrigger
    });
    gsap.to( '.logo-clone .peak-logo-svg-circle', {
      fill: "#FFFFFF",
      scrollTrigger: shrinkTrigger
    });
    gsap.to( '.logo-clone .peak-logo-svg-letters', {
      fill: "#000000",
      scrollTrigger: shrinkTrigger
    });
  }

}

export { homepage_v2 };