function animateCards() {
    const cards = document.querySelectorAll('.product-card');
    cards.forEach((card, index) => {
      setTimeout(() => {
        card.classList.add('show');
      }, 200 * index);
    });
  }
  
  window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    const windowHeight = window.innerHeight;
    const cardsPosition = document.querySelector('.products').getBoundingClientRect().top;
  
    if (cardsPosition - windowHeight <= 0) {
      animateCards();
      window.removeEventListener('scroll', animateCards);
    }
  });
  