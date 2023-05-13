document.getElementById("addImageButton").addEventListener("click", function(event) {
  document.getElementById("divAddAnimal").style.display = "block";
});

document.getElementById("closeButton").addEventListener("click", function(event) {
  event.preventDefault();
  document.getElementById("divAddAnimal").style.display = "none";
window.history.pushState({}, '', '/');
});