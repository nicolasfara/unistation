/*
 * vendor-order.js
 * Copyright (C) 2019 nicolasfara <nicolas.farabegoli@gmail.com>
 *
 * Distributed under terms of the MIT license.
 */

// Enable pusher logging - don't include this in production
// Pusher.logToConsole = true;

// Initiate the Pusher JS library
var pusher = new Pusher('API_KEY_HERE', {
    encrypted: true
});

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('status-liked');

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\OrderMade', data => {
    // this is called when the event notification is received...
});
