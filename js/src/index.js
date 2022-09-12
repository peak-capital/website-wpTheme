import "./navigation.js";
import "./faq.js";
import { pageScrolls } from "./pagescrolls.js";
import { homepage_v2 } from "./home-v2.js";
import { homeIntro_v2 } from "./home-intro-v2.js";
import { peakCardsNav } from "./peak-cards-nav.js";
import { slider } from "./slider.js";
import { foundersPage } from "./founders-coins.js";
import { teamCoin } from "./team-coins.js";
import { darkmodeToggle } from "./darkmode-toggle.js";

  // Homepage script only runs on Homepage (Duh)
  if ( document.body.classList.contains( 'home' ) ){
    window.addEventListener('load', () => {
      homeIntro_v2();
      homepage_v2();
    })
  };
  if (document.querySelector('.card')) {
    peakCardsNav();
  };
  if (document.querySelector('.testimonial-carousel')) {
    slider(true);
  };
  if (document.querySelector('.founders')) {
    foundersPage();
  };
  if (document.querySelector('.team-header-coin')) {
    teamCoin();
  };
  if ( document.querySelector('.darkmode-toggle') ) {
    darkmodeToggle();
  }
  pageScrolls();