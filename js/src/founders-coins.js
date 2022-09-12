import { gsap } from "gsap";

function foundersPage(){
  let allCoins = document.querySelectorAll( '.card-preview' );
  //gsap.set( '.founder-photograph', { rotationY: -90 } )
  for ( let i = 0; i < allCoins.length; i++ ) {
    let thisCoin = allCoins[i].querySelector( '.founder-coin' );
    let thisPhoto = allCoins[i].querySelector( '.founder-photograph' );
    let coinFlip = gsap.timeline( { paused: true } )
      .to( thisCoin, { rotationY: 90, scale: .9, duration: .666, ease: "power4.inOut" })
      .from( thisPhoto, { rotationY: -90, scale: .9, duration: .666, ease: "power4.inOut" }, .666) ;
    allCoins[i].addEventListener( 'mouseover', () => {
      coinFlip.play().timeScale( 2 );
    } )
    allCoins[i].addEventListener( 'mouseleave', () => {
      coinFlip.reverse();
    } )
  }
  
  let founders = document.querySelector( '.founders' );
  let saasBtn = document.querySelector( '.founder-filter-saas' );
  let pmBtn = document.querySelector( '.founder-filter-pm' );
  let exitBtn = document.querySelector( '.founder-filter-exits' );
  saasBtn.addEventListener( 'click', () => {
    saasBtn.classList.toggle('toggled');
    founders.classList.toggle('saas-filtered')
  } );
  pmBtn.addEventListener( 'click', () => {
    pmBtn.classList.toggle('toggled');
    founders.classList.toggle('pm-filtered')
  } );
  exitBtn.addEventListener( 'click', () => {
    exitBtn.classList.toggle('toggled');
    founders.classList.toggle('exit-filtered')
  } );
}
export { foundersPage };