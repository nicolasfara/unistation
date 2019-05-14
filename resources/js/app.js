/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./materialize.min')
//require('./nav')
//require('./home')
//require('./client-home')
//require('./vendor_editprofile')
//
//document.addEventListener('DOMContentLoaded', function() {
//  var sidenav = document.querySelectorAll('.sidenav');
//  M.Sidenav.init(sidenav, {  });
//  var collapsible = document.querySelectorAll('.collapsible');
//  M.Collapsible.init(collapsible, {  });
//  var select = document.querySelectorAll('select');
//  M.FormSelect.init(select, {  });
//  var dropdowns = document.querySelectorAll('.dropdown-trigger')
//  M.Dropdown.init(dropdowns);
//  console.log('Components initialized')
//
//  //
//  show_card_fadein()
//});

import Echo from "laravel-echo"

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
    auth: {
        headers: {
            Authorization: 'Bearer ' + auth.token
        }
    }
});
