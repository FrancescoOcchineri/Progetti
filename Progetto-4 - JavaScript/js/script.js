window.addEventListener('scroll', () => {
    let nav = document.querySelector('nav');
    let header = document.querySelector('header').offsetHeight;
    let scroll = window.scrollY;

    if (scroll > header) {
      nav.style.backgroundColor = 'white';
    } else {
      nav.style.backgroundColor = '#ffc017';
    }
  });