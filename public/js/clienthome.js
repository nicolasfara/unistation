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
  M.Datepicker.init(date, { 
    'format': 'd-m-yyyy',
    'firstDay' : 1,
    'defaultDate' : today,
    'setDefaultDate' : true,
	'autoClose' : true,
	'minDate' : today
  });
  
  var timer = document.querySelectorAll('.timepicker');
  M.Timepicker.init(time, {
    'twelveHour' : false,
    'defaultTime' : 'now'
	/*onCloseStart: function(){
		console.log(timer.time); 
	}*/
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

