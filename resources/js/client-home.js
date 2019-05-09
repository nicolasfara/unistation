/*
 * client-home.js
 * Copyright (C) 2019 nicolasfara <nicolas.farabegoli@gmail.com>
 *
 * Distributed under terms of the MIT license.
 */

var tabs = document.querySelectorAll('.tabs')
for (var i = 0; i < tabs.length; i++){
  M.Tabs.init(tabs[i]);
}
