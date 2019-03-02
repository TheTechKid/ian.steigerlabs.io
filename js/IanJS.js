// Snackbar Code for downloads.html
function snackbarJS() {
	"use strict";
    var x = document.getElementById("snackbar");
	console.log("Thanks For Downloading!");
    x.className = "show bg-light text-dark rounded";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}
// checks if /var/www/html/update.js = yes or no
var x = document.getElementById("rebootalert");
x.className = "invisible";
if (update === "yes") {
x.className = x.className.replace("invisible", "alert alert-warning visible"); 
}
// Rickroll'd
var dateget = new Date();
var month = dateget.getMonth();
var day = dateget.getDate();
if (day === 1 && month === 3) {
 window.location.replace("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
}