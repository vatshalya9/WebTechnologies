<html>
<head>
<title> </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<style>
.live{
	display:inline;
}
</style>
</head>
<body>
<section style="width:400px;">
<div style="background:#ddd;color:#000000;text-align:center;padding:5px;">
<h4>Ajax</h4>
<button class="ajax_button">Click here</button>
</div>
<div style="border:1px solid #000000;height:150px;">
<p><b>Ajax states:</b></p>
<b >Respose_text</b>: <p class="live" id="Respose_text"></p><br/>
<b >readystate</b>: <p  class="live" id="readystate"></p><br/>
<b >status</b>: <p  class="live" id="status"></p>
</div>
<div style="border:1px solid #000000;height:200px;color:#777;">
<p><b>when 200 state:(Output)</b></p>
<table border='1' >
<thead>
	<th>sno</th>
	<th>response_text</th>
	<th>ready status</th>
	<th>status</th>
</thead>
<tbody id="table_success">
	
</tbody>
</table>

<p>note: here sno value is value of sno in database</p>
</div>

</section>
<script>
$(".ajax_button").click(function(){

$.ajax({
    url: "ajax.php",
    type: "POST",
    success: function(textStatus, xhr,msg) {
        console.log(arguments);
        console.log(xhr.status);
		//alert(textStatus);
		if(textStatus!=""){
			$("#Respose_text").text(textStatus);
			msg = textStatus;
			response_text(msg);
		}
		
    },
    complete: function(xhr, textStatus) {
        console.log(xhr.status);
		xhr.onreadystatechange =  xhr.readyState;
		//alert(xhr.onreadystatechange);
		 if (xhr.readyState == 4 )
    {
		$("#readystate").text(xhr.readyState);
	 ready_state(xhr.readyState);
    }	
	if (xhr.status == 200)
    {
		$("#status").text(xhr.status);
       status_success(xhr.status);
    }
	}
		
	
});	
});
function response_text(text){
	form_data = "text="+text+"&state="+0+"&success="+0;
 $.ajax({
        url: "insert_db.php",
        type: "post",
        data: form_data ,
        success: function () {
                        

        },
        error: function() {
           
        }


    });
	
}
function ready_state(state){
	form_data = "text="+0+"&state="+state+"&success="+0;
 $.ajax({
        url: "insert_db.php",
        type: "post",
        data: form_data ,
        success: function () {
                     

        },
        error: function() {
          
        }


    });
	
}
function status_success(status){
	form_data = "text="+0+"&state="+0+"&success="+status;
 $.ajax({
        url: "insert_db.php",
        type: "post",
        data: form_data ,
        success: function (response) {
               if(response!=""){
				   $("#table_success").html(response);
			   }  

        },
        error: function() {
           
        }


    });
	
}
</script>
</body>
</html>