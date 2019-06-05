/*
 * vendorhome.js
 * Copyright (C) 2019 nicolasfara <nicolas.farabegoli@gmail.com>
 *
 * Distributed under terms of the MIT license.
 */

function hide_all() {
  document.getElementsByClassName('editprofile')[0].style.display = "none";
  document.getElementsByClassName('vendororders')[0].style.display = "none";
  document.getElementsByClassName('vendorproducts')[0].style.display = "none";
}

function show_vendor_edit_profile() {
  hide_all();
  document.getElementsByClassName('editprofile')[0].style.display = "block";
}

function show_vendor_orders() {
  hide_all();
  document.getElementsByClassName('vendororders')[0].style.display = "block";
}

function show_vendor_products() {
  hide_all();
  document.getElementsByClassName('vendorproducts')[0].style.display = "block";
}

document.addEventListener('DOMContentLoaded', function() {
  var tabs = document.querySelectorAll('.tabs');
  M.Tabs.init(tabs, {  });
  var modal = document.querySelectorAll('.modal');
  M.Modal.init(modal, {  });
  var sidenav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sidenav, {  });
  var collapsible = document.querySelectorAll('.collapsible');
  M.Collapsible.init(collapsible, {  });
  var select = document.querySelectorAll('select');
  M.FormSelect.init(select, {  });

  document.getElementById("editprofile-btn").addEventListener("click", show_vendor_edit_profile);
  document.getElementById("vendor-order-btn").addEventListener("click", show_vendor_orders);
  document.getElementById("vendor-edit-products-btn").addEventListener("click", show_vendor_products);


  var url = new URL(window.location.href)
  var new_item = url.searchParams.get('new_item')
  if (new_item == 'true'){
    M.toast({html: 'Hai un nuovo ordine!', classes: 'rounded', displayLength: 6000})
  }
});


