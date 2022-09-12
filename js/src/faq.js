let allFAQs = document.querySelectorAll('.peak-faq');
for ( let i = 0; i < allFAQs.length; i++ ) {
  allFAQs[i].querySelector( '.peak-faq-question' ).addEventListener( 'click', () => {
    allFAQs[i].classList.toggle('faq-toggled');
  } )
}