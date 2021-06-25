var host_name = "http://localhost";
$(document).ready(function(){
	
	var inputMessage = $("#message");
	function show() {
		
		$.ajax({
			type: "GET",
			url: host_name+"/chat/get",
			success: function(data){
				var data = JSON.parse(data);
				document.getElementById("chat").innerHTML = data;
			}
		});
	}
	show();
	setInterval(function(){show();}, 5000);
	
	$("#submit").click(function(){
		if(inputMessage.val())
		{
			var message = inputMessage.val();
			var token = $("input[name*='_token']").val();
			$.ajax({
				type: "POST",
				url: host_name+"/chat/send",
				data: {_token:token , message: message},
				success: function(){
					show();
					inputMessage.val('');
				}
			});
		}
		else alert('لطفا پیام خود را واردکنید.');
	});
});