import { gsap } from 'gsap';

function homeIntro(){
  var source = document.querySelector('.peak-branding'),
  destination = document.querySelector('body');
  
  let logoClone = source.cloneNode(true);
  logoClone.classList.add('logo-clone');
  destination.appendChild(logoClone);
  document.querySelector('.logo-clone').classList.remove('peak-branding');
  
  const origLogoSize = source.querySelector('.peak-logo-svg').outerWidth;
  let tlIntro = gsap.timeline({ paused: false });
  tlIntro.set('.logo-clone', {
    width: 300,
    height: 300,
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
    duration: 1
  }, 'coinIn' )
  .to( '.logo-clone .peak-logo-svg' , {
    rotationZ: 0,
    duration: 1
  }, 'coinIn' )
  .addLabel('pageIn', '2')
  .set( 'body.home #page', {
    autoAlpha: 1
  }, 'coinIn' )
  .to( '.logo-clone', {
    x: '1rem',
    y: '1rem',
    xPercent: 0,
    yPercent: 0,
    width: document.querySelector('.peak-branding .peak-logo-svg').clientWidth,
    height: document.querySelector('.peak-branding .peak-logo-svg').clientWidth,
    duration: 1
  }, 'pageIn')
  .to( '.logo-clone .peak-logo-svg' , {
    rotationZ: 360,
    duration: 1
  }, 'pageIn' )
  .to( '.peak-homepage', {
    xPercent: 0, duration: 1, ease: 'circ.out'
  }, 'pageIn')
  .fromTo( '.home-image .post-thumbnail', {
    transformOrigin: "50% 50%",
    rotationZ: -180,
  }, {
    rotationZ: 0,
    duration: 1,
    ease: 'circ.out'
  }, 'pageIn' )
  .addLabel('done')
  .set('.logo-clone', { autoAlpha: 0 }, 'done+=1')
  .to('#masthead', { autoAlpha: 1, duration: .3 }, 'done' )
}
export { homeIntro };