function slider(indent = false){
  if ( document.querySelector( '.slider' ) ){
    let slider = document.querySelector( '.slider .wp-block-group__inner-container' );
    let sliderScrollWidth = slider.scrollWidth;
    let sliderSlides = slider.querySelectorAll('.slide');
    if (indent){
      slider.scrollTo( (sliderScrollWidth / sliderSlides.length) * 0.5, 0, 'smooth' );
    }
  }
}
export { slider };