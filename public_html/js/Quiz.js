/**
 * AJAX DAMMIT
 */
var i = 1;
$(function(){
	$('form#question-form').submit(function(){
		if (i < 2) {
			$.ajax({
				type: 'POST',
				url: 'verify.php',
				data: {
					answer: $('input:radio[name=answer]:checked').val()
				}	
			}).done(function(message){
				i++;
				alert("a resposta está" + message);
			});
			return false;
		} else {
			$.ajax({
				type: 'POST',
				url: '',
				data: {
					action: 'Answered',
					answer: $('input:radio[name=answer]:checked').val()
				}	
			});
		}
	});
});