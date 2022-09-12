import { gsap } from 'gsap';

function homeIntro_v2(){    
  var source = document.querySelector('.peak-branding'),
  destination = document.querySelector('body');
  let logoClone = source.cloneNode(true);
  logoClone.classList.add('logo-clone');
  destination.appendChild(logoClone);
  document.querySelector('.logo-clone').classList.remove('peak-branding');
  
  var homeLogoSize;
  var homeLogoLeft;
  var homeLogoTop;
  if ( window.matchMedia( "(orientation: landscape)" ).matches ){
    if ( window.innerWidth / window.innerHeight >= 1.75 ){
      homeLogoSize = window.innerHeight / 1.66;
      homeLogoLeft = ( window.innerWidth / 4 ) - ( homeLogoSize / 2 );
      homeLogoTop = ( window.innerHeight / 2 ) - ( homeLogoSize / 1.666 );
    }
    else {
      homeLogoSize = "40vw";
      homeLogoLeft = "5vw";
      homeLogoTop = "5vw"
    }
  } 
  else {
    homeLogoSize = "80vw";
    homeLogoLeft = "10vw";
    homeLogoTop = "10vw";
  };

  if ( document.querySelector('.home-copy').scrollTop === 0 ){
    let tlIntro = gsap.timeline({ paused: false });
    tlIntro.set('.logo-clone', {
      width: homeLogoSize,
      height: homeLogoSize,
      x: window.outerWidth/2,
      y: window.innerHeight/2,    
      xPercent: -50,
      yPercent: -50,
      autoAlpha: 0,
      transformOrigin: "0% 0%"
    })
    .set( '.logo-clone .peak-logo-svg', {
      rotationZ: -90,
      transformOrigin: "50% 50%",
    } )
    .set( '.peak-homepage', { 
      xPercent: 100,
    } )
    .addLabel('coinIn', '0')
    .to( '.logo-clone' , {
      autoAlpha: 1,
      duration: 1,
      ease: 'power3.in'
    }, 'coinIn' )
    .to( '.logo-clone .peak-logo-svg' , {
      rotationZ: 0,
      duration: 1.5,
      ease: 'power3.inOut'
    }, 'coinIn' )
    .addLabel('pageIn', '2')
    .set( 'body.home #page', {
      autoAlpha: 1
    }, 'coinIn' )
    .to( '.logo-clone', {
      x: homeLogoLeft,
      y: homeLogoTop,
      xPercent: 0,
      yPercent: 0,
      duration: 1
    }, 'pageIn')
    .to( '.logo-clone .peak-logo-svg' , {
      rotationZ: -360,
      duration: 1
    }, 'pageIn' )
    .to( '.peak-homepage', {
      xPercent: 0, duration: 1, ease: 'circ.out'
    }, 'pageIn')
    .addLabel('done')
    // .set('.logo-clone', { autoAlpha: 0 }, 'done+=1')
    // .to('#masthead', { autoAlpha: 1, duration: .3 }, 'done' )
  } else {
    gsap.to( 'body.home #page', {
      autoAlpha: 1
    })
    gsap.set( '.logo-clone', {
      width: homeLogoSize,
      height: homeLogoSize,
      x: homeLogoLeft,
      y: homeLogoTop,
      xPercent: 0,
      yPercent: 0,
      duration: 1
    })
  }
}
export { homeIntro_v2 };