$( document ).ready(function() {
var table = $('#example').dataTable();

var Carts=[];
var selectedCart;

    console.log("Javascript Ready");
    $('#submitCart').click(function(){
		
       /*  $(".items:checked").each(function() {
         
		    var  sThisVal = (this.checked ? $(this).val() : "");
		   Carts.push(sThisVal);
        }); */
		
		
		var data = table.$('input').serialize();
		var url = encodeURI("AddToCartPageIncluded.php?key="+data);
		console.log(url);
        window.location=url;
    });
	 
});
