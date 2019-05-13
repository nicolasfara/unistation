/*
 * clienthome.js
 * Copyright (C) 2019 nicolasfara <nicolas.farabegoli@gmail.com>
 *
 * Distributed under terms of the MIT license.
 */

document.addEventListener('DOMContentLoaded', function() {
  var tabs = document.querySelectorAll('.tabs')
  M.Tabs.init(tabs);
  var dropdown = document.querySelectorAll('.dropdown-trigger');
  M.Dropdown.init(dropdown, { 'coverTrigger': false, 'constrainWidth': false });
  var sidenav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sidenav, {  });
});
