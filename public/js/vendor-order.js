/*
 * vendor-order.js
 * Copyright (C) 2019 nicolasfara <nicolas.farabegoli@gmail.com>
 *
 * Distributed under terms of the MIT license.
 */

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('4a06878a7e2abf7e04df', {
  cluster: 'eu',
  forceTLS: true
});

var channel = pusher.subscribe('unistation-development');
channel.bind('App\\Events\\OrderMade', data => {
  console.log('hola')
});
