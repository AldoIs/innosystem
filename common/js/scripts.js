

jQuery(document).ready(function($) {
 $('#profileform-cumpleanos').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });	
 $(".need-update").hover(function() {
	/* Stuff to do when the mouse enters the element */
	 Materialize.toast('Actualiza tu información', 4000)
}, function() {
	/* Stuff to do when the mouse leaves the element */
});

$(".tooltipped").tooltip({delay:50});

});


