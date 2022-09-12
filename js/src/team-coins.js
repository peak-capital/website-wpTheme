import gsap from "gsap/gsap-core";

function teamCoin(){

  gsap.to(".team-header-coin-ring", {
    rotationZ: 360,
    duration: 10,
    repeat: -1,
    ease: 'none'
  })
  let coin = document.querySelector('.team-header-coin');
  let coinFlip = gsap.timeline({ paused: true })
    .set(".team-header-coin-dataside", {
      transformOrigin: "50% 50%",
      rotationY: -90
    })
    .set(".team-header-coin-gutside", {
      transformOrigin: "50% 50%",
      rotationY: 0
    })
    .to(".team-header-coin-dataside", {
      rotationY: 0,
      duration: 1,
      ease: 'power3.inOut'
    }, 1)
    .to(".team-header-coin-gutside", {
      rotationY: 90,
      duration: 1,
      ease: 'power3.inOut'
    }, 0);

    coin.addEventListener( 'mouseover', () => {
      coinFlip.play().timeScale( 2.5 );
    } )
    coin.addEventListener( 'mouseleave', () => {
      coinFlip.reverse();
    } )
}
export { teamCoin };