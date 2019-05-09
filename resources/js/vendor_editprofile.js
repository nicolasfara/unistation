/*
 * vendor_editprofile.js
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

document.getElementById("editprofile-btn").addEventListener("click", show_vendor_edit_profile);
document.getElementById("vendor-order-btn").addEventListener("click", show_vendor_orders);
document.getElementById("vendor-edit-products-btn").addEventListener("click", show_vendor_products);
