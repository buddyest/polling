// Get the modal
var modal = document.getElementById('id01');

//Function for reading the image for candidate
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
$(document).ready(function() {
	// $('.leader-signup').click(function(e) {
	// 	$('#leader-sign-up').show(500);
	// 	$('#voter-registration').hide(500);
	// 	$('#normal-login').hide(500);
	// 	e.preventDefault();
	// });
	// $('.voter').click(function(e) {
	// 	$('#voter-registration').show(500);
	// 	$('#leader-sign-up').hide(500);
	// 	$('#normal-login').hide(500);
	// 	e.preventDefault();
	// });
	// $('.login').click(function(e) {
	// 	$('#normal-login').css('display','block',);
	// 	$('#normal-login').show(500);
	// 	$('#voter-registration').hide(500);
	// 	$('#leader-sign-up').hide(500);
	// 	e.preventDefault();
	// });
	$('#voter-button').click(function(event) {
		$('#voter-registration').show();
		$('#candidate-registration').hide();
	});
	$('#candidate-button').click(function(event) {
		$('#voter-registration').hide();
		$('#candidate-registration').show();
	});
});