function darkmodeToggle() {
  let togglerInput = document.querySelector('.darkmode-toggle-switch input');
  if ( !togglerInput.checked ) {
    if ( !document.body.classList.contains('darkmode-off') ) {
      document.body.classList.add('darkmode-off')
    }
  }
  togglerInput.addEventListener('change', () => {
    document.body.classList.toggle('darkmode-off');
  })
}
export { darkmodeToggle };