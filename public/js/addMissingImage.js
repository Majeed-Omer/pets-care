document.getElementById("addMSButton").addEventListener("click", function(event) {
  document.getElementById("divOne").style.display = "block";
});

document.getElementById("closeButtonMS").addEventListener("click", function(event) {
  event.preventDefault();
  document.getElementById("divOne").style.display = "none";
window.history.pushState({}, '', '/');
});


const cards = document.querySelectorAll('.cardMissing');
  let delay = 0;

  cards.forEach((card) => {
    setTimeout(() => {
      card.style.display = 'block';
      card.classList.add('animated');
    }, delay);
    delay += 500; // Adjust the delay between cards here
  });
