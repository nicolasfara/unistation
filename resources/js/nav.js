/*
 * nav.js
 * Copyright (C) 2019 nicolasfara <nicolas.farabegoli@gmail.com>
 *
 * Distributed under terms of the MIT license.
 */
 function dropdown1() {
console.log("Hello world!"); 
 }
 document.addEventListener('DOMContentLoaded', function() {
 	var elems = document.querySelectorAll('.sidenav');
 	var instances = M.Sidenav.init(elems, {  });
 });

