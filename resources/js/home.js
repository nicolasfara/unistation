function fadeIn(el, display){
  el.style.opacity = 0;
  el.style.display = display || "block";

  (function fade() {
    var val = parseFloat(el.style.opacity);
    if (!((val += .1) > 1)) {
      el.style.opacity = val;
      requestAnimationFrame(fade);
    }
  })();
};

document.addEventListener("DOMContentLoaded", () => {
  var slide_components = document.getElementsByClassName('home-rule')
  Array.from(slide_components).forEach(elem => {
    elem.style.display = 'none'
  })

  let box_elem = Array.from(slide_components).reverse()
  let delay = 1000

  let timer = setInterval(elem => {
    fadeIn(elem.pop(), 'block')
    console.log(elem)
    if (elem.length === 0) {
      console.log('empty array')
      clearInterval(timer)
    }
  }, delay, box_elem)
});
