/*
 * home.js
 * Copyright (C) 2019 nicolasfara <nicolas.farabegoli@gmail.com>
 *
 * Distributed under terms of the MIT license.
 */

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

function show_card_fadein() {
  var slide_components = document.getElementsByClassName('card')
  Array.from(slide_components).forEach(elem => {
    elem.style.display = 'none'
  })

  let box_elem = Array.from(slide_components).reverse()
  let delay = 1000

  let timer = setInterval(elem => {
    fadeIn(elem.pop(), 'block')
    if (elem.length === 0) {
      clearInterval(timer)
    }
  }, delay, box_elem)
}


document.addEventListener('DOMContentLoaded', function() {
  var sidenav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sidenav, {  });
  var collapsible = document.querySelectorAll('.collapsible');
  M.Collapsible.init(collapsible, {  });
  var tabs = document.querySelectorAll('.tabs');
  M.Tabs.init(tabs, {  });
  var modal = document.querySelectorAll('.modal');
  M.Modal.init(modal, {  });
  var select = document.querySelectorAll('select');
  M.FormSelect.init(select, {  });
  var dropdowns = document.querySelectorAll('.dropdown-trigger')
  M.Dropdown.init(dropdowns);
  var carousel = document.querySelectorAll('.carousel');
  M.Carousel.init(carousel, { fullWidth: true, indicators: true });
  var slider = document.querySelectorAll('.slider');
  M.Slider.init(slider, { });
  var parallax = document.querySelectorAll('.parallax');
  M.Parallax.init(parallax, { });
  //var cart = document.querySelectorAll('.shopping-cart')
  //M.Dropdown.init(cart, { 'coverTrigger': false, 'constrainWidth': false });
  console.log('Components initialized')

  //
  show_card_fadein()
});