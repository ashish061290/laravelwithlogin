$(document).ready(function(){$(document).on('change','#photo_mobile',function(){var name=document.getElementById("photo_mobile").files[0].name;var formdata=new FormData(document.getElementById('img_mobile_form'));$.ajax({url:base_url+"Advicer/image_upload",method:"POST",data:formdata,processData:!1,cache:!1,contentType:!1,success:function(data){alert('Successfully Assign !!!');if(data==1){showImage_mobile()}else{alert('Do Not Assign..')}}})})});function showImage_mobile(){var imgsrc=document.getElementById("image_mobile");var target=document.getElementById("photo_mobile");var render=new FileReader();render.addEventListener("load",function(){imgsrc.src=render.result},!1);if(target.files[0]){render.readAsDataURL(target.files[0])}}
function validation_expert_mobile(target){if(target.files.length>0){for(var i=0;i<=target.files.length-1;i++){var fsize=target.files.item(i).size;if(fsize>=102400){alert("File too Big, please select a file less than 100kb")}else{return!0}}}}