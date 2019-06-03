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
  var today = new Date();
  var date = document.querySelectorAll('.datepicker');
  var di = M.Datepicker.init(date, {
    'format': 'd-m-yyyy',
    'firstDay' : 1,
    'defaultDate' : today,
    'setDefaultDate' : true,
    'minDate': new Date(),
  });
  var time = document.querySelectorAll('.timepicker')
  var st = M.Timepicker.init(time, {
    'twelveHour' : false,
    'defaultTime' : '12:00',
    'onCloseEnd': function() {
      var delivery_date = new Date(di[0].date)
      delivery_date.setHours(st[0].time.split(':')[0])
      delivery_date.setMinutes(st[0].time.split(':')[1])
      if (delivery_date < Date.now()) {
        document.getElementById("send_order").classList.add('disabled');
      } else {
        document.getElementById("send_order").classList.remove('disabled');
      }
    },
  });
});


var HttpClient = function() {
  this.get = function(aUrl, aCallback) {
    var anHttpRequest = new XMLHttpRequest();
    anHttpRequest.onreadystatechange = function() {
      if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
        aCallback(anHttpRequest.responseText);
    }

    anHttpRequest.open("GET", aUrl, true);
    anHttpRequest.send(null);
  }
}

