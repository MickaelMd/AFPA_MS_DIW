let constrain = 20;
let mouseOverContainer = document.getElementById("ex1");
let ex1Layer = document.getElementById("ex1-layer");

function transforms(x, y, el) {
  let box = el.getBoundingClientRect();
  let calcX = -(y - box.top - box.height / 2) / constrain;
  let calcY = (x - box.left - box.width / 2) / constrain;

  return (
    "perspective(500px) " +
    "rotateX(" +
    calcX +
    "deg) " +
    "rotateY(" +
    calcY +
    "deg)"
  );
}

function transformElement(el, xyEl) {
  el.style.transform = transforms(xyEl[0], xyEl[1], el);
}

// Gestion du mouvement de la souris
mouseOverContainer.addEventListener("mousemove", function (e) {
  let xy = [e.clientX, e.clientY];
  window.requestAnimationFrame(function () {
    transformElement(ex1Layer, xy);
  });
});

// Réinitialisation de la transformation lorsque la souris quitte le conteneur
mouseOverContainer.addEventListener("mouseleave", function () {
  ex1Layer.style.transform = "perspective(500px) rotateX(0deg) rotateY(0deg)";
});
