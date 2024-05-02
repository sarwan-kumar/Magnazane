<script>
$(document).ready(function() {

	$('#butsave').on('click', function() {
     
		//$("#butsave").attr("disabled", "disabled");
		var name = $('#ename').val();
		var simg = $('#simg').val();
		var type= "ac";
		//alert(name);
		if(name!="" && simg!=""  ){
			$.ajax({
				url: "master.php",
				type: "POST",
				data: {
					type: type,
					name: name,
					simg: simg,
										
				},
				    cache: false,
                    success: function(dataResult){
					// var dataResult = JSON.parse(dataResult);
					// if(dataResult.statusCode=='200'){
                    //     window.location.reload();
                    //     success_staff();
                        
					// }
					// else if(dataResult.statusCode=='201'){
                    //     error_staff();
					// }else if(dataResult.statusCode=='212'){
                    // $("#butsave").removeAttr("disabled");
                    //  success_staff();
                    //  window.location.reload();
					// }
					
				}
            });
		}
		else{
			
            warning_staff();
		}
	});
  

});
  </script>
 <script type="text/javascript">
    $(document).ready(function() {
        
		var staff ="STAF";	
	    //alert(state);
			
			$.ajax({
				type:"POST",
				url:"get_staff.php",
				data:{staff:staff},
				success:function(data, textStatus){
				$("#view_staff").html(data);
					//alert(data);
				}
			});
		
	});

       function dlt(bvalue){
        var bb1 = bvalue; 
        //alert(bb1);
        var sdlt = "sdlt"; 
        $.ajax({
				url: "get_staff.php",
				type: "POST",
				data: {
					sdlt: sdlt,
					bb1: bb1
									
				},
				cache: false,
				success: function(dataResult)  
				{
                    var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==213){
                        var ff1="Employee Delete Successful";
                        new_note(ff1); 
                       window.location.reload();
					} else if(dataResult.statusCode==214){
                       
                        var ff1="Try After Some Time";
                        new_note(ff1); 
                    }
                    }
            });
        }

        function mdl(bvalue){
        var val1 = bvalue; 

       // alert(val1);
        var mld = "mld"; 
        $.ajax({
				url: "get_staff.php",
				type: "POST",
				data: {
					mld: mld,
					val1: val1
									
				},
				cache: false,
				success:function(data, textStatus){
				$("#update_staff").html(data);
					//alert(data);
				}
            
            });
        }

</script>