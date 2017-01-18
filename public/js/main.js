window.onload = function () {
	// Keeps the main image from partially loading, loads the image after all the data has been recieved
	document.getElementById("header").className = "";
	document.getElementById("header").className = "headerImage";
}

$(document).ready(function() {
    $('select').material_select();

    $('.datepicker').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 2 // Creates a dropdown of 15 years to control year
  	});
});
