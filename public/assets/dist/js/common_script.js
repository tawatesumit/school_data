$(function(){

/*hide unhide location buttons*/
$("#left").click(function(){

	$('#upper,#middle,#lower').attr("disabled",true);
	$('#upper,#middle,#lower').prop('checked', false);

});

if (!$('#right').is(":checked")) {
	$('#upper,#middle,#lower').attr("disabled",true);

}
$("#right").click(function(){
	$('#upper,#middle,#lower').attr("disabled",false);

});	

$("#upper,#middle,#lower").click(function(){
	if ($('#upper + label').is(":checked")) {
		$(this).css("background","#38c");
	}
	else if ($('#middle + label').is(":checked")) {
		$(this).css("background","#38c");
	}
	else if ($('#lower + label').is(":checked")) {
		$(this).css("background","#38c");
	}
	$('#right').prop('checked', true);
});

$("#singlelesion").click(function(){

	$('#numerical').attr("disabled",true);
	$('#numerical').val('');

});

if (!$('#multiplelesion').is(":checked")) {
	$('#numerical').attr("disabled",true);

}
$("#multiplelesion").click(function(){

	$('#numerical').attr("disabled",false);

});

});