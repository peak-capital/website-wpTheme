function peakCardsNav(){
  
  const cards = document.querySelectorAll('.card');

  for (let i = 0; i < cards.length; i++ ) {
    let closex = cards[i].querySelector('.cards-nav-close');    
    let next = cards[i].querySelector('.cards-nav-next');    
    let prev = cards[i].querySelector('.cards-nav-prev');    
    cards[i].querySelector('.card-preview').addEventListener( 'click', function(){
       cards[i].classList.add('expanded');
    });
    closex.addEventListener('click', function(){
      this.closest('.card').classList.remove('expanded');
    });
    next.addEventListener('click', function(){
      cards[i].classList.toggle('expanded');
      if ( i == cards.length - 1 ){
        cards[0].classList.toggle('expanded');
      } else {
        cards[i+1].classList.toggle('expanded');        
      }
    });
    prev.addEventListener('click', function(){
      cards[i].classList.toggle('expanded');
      if ( i == 0 ){
        cards[ cards.length - 1 ].classList.toggle('expanded');
      } else {
        cards[i-1].classList.toggle('expanded');        
      }
    });
  }

}
export { peakCardsNav };