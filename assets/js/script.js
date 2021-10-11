$(function(){

	console.log('Collecter et archiver ok')

	$("#style").val( "none" )
	if(localStorage.getItem('style') != ""){
		$("#optional-style").attr("href",localStorage.getItem('style'))
		$("#style").val( localStorage.getItem('style') )
	}


	$("#style").on("change", function(){

		if($(this).val() == "none"){
			localStorage.removeItem("style")
			$("#optional-style").attr("href","")
		}else{
			$("#optional-style").attr("href",$(this).val())
			localStorage.setItem('style', $(this).val())
		}
	})

})