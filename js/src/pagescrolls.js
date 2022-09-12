import { gsap } from "gsap/gsap-core";
import { ScrollTrigger } from "gsap/ScrollTrigger";

function pageScrolls() {
  

// Logo rolls'n'scrolls
// ----------------------
//   gsap.registerPlugin(ScrollTrigger);
//   gsap.to('.peak-logo-svg .all', {
  //     transformOrigin: "50% 50%",
  //     rotationZ: 3600,
  //     scrollTrigger: {
    //       trigger: 'body',
    //       start: "0% 0%",
    //       end: "100% center",
    //       scrub: true
    //     },
    //   })
    // }

// Black and White inversion when scrolling over black background color

function navigationInvert(){
  if (document.querySelector('.has-brand-black-background-color')) {
    gsap.registerPlugin(ScrollTrigger);
    const logoHeight = document.querySelector('.peak-logo-svg').clientHeight/1.5 * -1;
    let tl = gsap.timeline({ 
      paused: true,
      scrollTrigger: {
        trigger: ".has-brand-black-background-color",
        start: logoHeight + " top",
        end: "100% 0%",
        toggleActions: "play reverse restart reverse",
      } 
    });
    tl.to(".peak-logo-svg .all", {
      transformOrigin: "50% 50%",
      rotationZ: 360,
      duration: .3
    }, 0);
    tl.to(".peak-logo-svg circle", {
      fill: "#FFFFFF",
      duration: .3
    }, 0);
    tl.to(".peak-logo-svg path, .peak-logo-svg polygon", {
      fill: "#000000",
      duration: .3
    }, 0)
    return tl;
  }
};
navigationInvert();
}

export { pageScrolls };