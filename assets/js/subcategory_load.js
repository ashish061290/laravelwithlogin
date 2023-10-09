function GetsubCategory(){
var category = document.getElementById("categoryname_id").value;
if(category !=''){
$.ajax({
url:base_url+"Ajax_req/subcategory",
method:"POST",
data:"category_id="+category,
success:function(data){
$("#selected_subcategory").empty();
$("#selected_subcategory").html(data);
}
})
}
}