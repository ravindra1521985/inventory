 $(document).ready(function(){
     
   //function to populate state on change of country
   $("body").on("change","#country_id",function(){
      
        var countryId   =$(this).val();
        
        var childId     =$(this).attr('child_id');
      //  alert(childId);
        var url			=$('#url').val();


     //  var siteUrl     =  url+"/ajax/getStateList/"+countryId
	  
	  //alert(url);
		
	//	var siteUrl     =  url+"/ajax/getStateList/"+countryId
        
        if(countryId)
        {
            $.ajax({
                type: "GET",
               url: siteUrl+"ajax/getStateList/"+countryId,
                //url:siteUrl,
                dataType: 'Json',
                error: function() {
                    alert('Unable to process request.');
                },
                success: function(Jdata){
                    var htmldata="<option value=''>Select state</option>";
                    $.each(Jdata, function(i, item) {
                        htmldata=htmldata+"<option value='"+i+"'>"+item+"</option>";
                       
                    });
                    
                    $('#'+childId).html(htmldata);
                },
               // beforeSend: function() {
               //   show_hie_loader();

              //  },
              //  complete: function() {
              //    show_hie_loader();
               // }
            });
        }
    });

    //function to populate city on change of state
    $("body").on("change","#state",function(){
       
	   
        var stateId=$(this).val();
        var childId=$(this).attr('child_id');
       // alert(stateId);
        //alert(childId);

	//	 var url			=$('#url').val();
       // var siteUrl =  url+"/ajax/getCityList/"+stateId
	   
	//   alert(siteUrl);
        if(stateId)
        {
            $.ajax({
                type: "GET",
              //  url: siteUrl+"/admin/ajax/get_city_list/"+stateId,
               url: siteUrl+"ajax/getCityList/"+stateId,
				// url: "ajax/getCityList/"+stateId,
                dataType: 'Json',
                error: function() {
                    //alert('Unable to process request.');
                },
                success: function(Jdata){
                    var htmldata="<option value=''>Select city</option>";
                    $.each(Jdata, function(i, item) {
                        htmldata=htmldata+"<option value='"+i+"'>"+item+"</option>";
                    });

                    $('#'+childId).html(htmldata);
                },
              //  beforeSend: function() {
               //   show_hie_loader();

              //  },
              //  complete: function() {
              //    show_hie_loader();
              //  }
            });
        }
    });
 	
	
	
	
	
/* for open modol poup*/
	
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
if(btn!=null){
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}
	
	
	
	
     	
});/*end of document ready*/

 

/*function to match password*/
function validatePassword(p,cp)
{
    $(p).removeClass("error");
    $(p).next("div[for='"+p.attr('id')+"']").remove();
    if(p.val() !== cp.val())
    {
        $(p).addClass("error");
        $(p).after("<div class='error-message' style='color:white;margin: 8px 10px 1px 5px;' for='"+p.attr('id')+"'>Password mismatch</div>");
        return false;
    }
    else if(p.val().length < 6){
       $(p).addClass("error");
        $(p).after("<div class='error-message' style='color:white;margin: 8px 10px 1px 5px;' for='"+p.attr('id')+"'>The password should be minimum of 6 characters</div>");
        return false;
    }
       else
    {
        return true;
    }
}



 
/*function to validate business email*/
function validateBusinessEmail(obj)
{
	
	//alert("bb");
    $(obj).removeClass("error");
    $(obj).next("div[for='"+obj.attr('id')+"']").remove();
    if(obj.val().length < 1)
    {
        $(obj).addClass("error");
        $(obj).after("<div class='error-message' for='"+obj.attr('id')+"'>Email id is required</div>");
        return false;
    }
    else if(!isValidEmail(obj.val()))
    {
        $(obj).addClass("error");
        $(obj).after("<div class='error-message' for='"+obj.attr('id')+"'>E-mail must be valid</div>");
        return false;
    }
    else
    {
        return true;
    }
}

/*function to validate not empty*/
function validateNotEmpty(obj,msg)
{
    $(obj).removeClass("error");
    $(obj).next("div[for='"+obj.attr('id')+"']").remove();
    if(obj.val().length < 1)
    {
       
        $(obj).addClass("error");

      
        //$('#'+obj.attr('id')).focus();
        $(obj).after("<div class='error-message' for='"+obj.attr('id')+"'>"+msg+"</div>");
        return false;
       
    }
    else
    {
        
        return true;
    }
}
/*function to validate mobile number*/
function validateBusinessNumber(obj)
{
    $(obj).removeClass("error");
    $(obj).next("div[for='"+obj.attr('id')+"']").remove();
    if(obj.val().length < 1)
    {
        $(obj).addClass("error");
        $(obj).after("<div class='error-message' for='"+obj.attr('id')+"'>Mobile No. is required</div>");
        return false;
    }
    else if(!isValidPhone(obj.val()))
    {
        $(obj).addClass("error");
        $(obj).after("<div class='error-message' for='"+obj.attr('id')+"'>Please enter valid mobile number</div>");
        return false;
    }
    else
    {
        return true;
    }
}


function onlyint(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}




/* Ravi Contact us page validation */
  function contact_validation(){
    

      var name= validateNotEmpty($("#name"),' Name  is required');
	   var phone=validateBusinessNumber($("#phone"),' Mobile is required')
      var email=validateBusinessEmail($("#email"),' Email  is required');
     
     // var subject=validateNotEmpty($("#subject"),' Subject is required')
     var message=validateNotEmpty($("#message"),' Message is required')

        if(name && email && phone  && message){
            
         
       return true;

        }
        else{
          return false;
        }


  }
  
  /*function to check is valid email format*/
function isValidEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
/*function to check is valid phone number format*/
function isValidPhone(phone){
    var regex = /^([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})+$/;
    return regex.test(phone);
}
/*function to check is valid zip code format*/
function isValidZip(zip){
    var regex = /^([0-9]{6})+$/;
    return regex.test(zip);
}
/*function to check is valid alphanumeric*/
function isValidAlphaNumeric(text)
{
    var regex = /^[0-9a-zA-Z]+$/;
    return regex.test(text);
}
  
  function ragistration_validation(){
	  
	
      var fname= validateNotEmpty($("#first_name"),'First Name is required');
	   var last_name= validateNotEmpty($("#last_name"),'Last Name is required');
	   
	    
	    var tsertsize= validateNotEmpty($("#tsize"),'T-Shert Size is required');
		
		 var fathername= validateNotEmpty($("#father_name"),'Father Name is required');
		  var mobile= validateBusinessNumber($("#mobile"),'Mobile No. is required');
		  var email=validateBusinessEmail($("#email"),'Email is required');
				
		  
		  var state= validateNotEmpty($("#state"),'State is required');
		  
		   var city= validateNotEmpty($("#city"),'City is required');
		/*	$state=	$("#state").val();
			
			if($state==''){
				$("#se").css("display", "block");
			}
				$city=	$("#city").val();
			if($city==''){
				$("#ci").css("display", "block");
			}*/
		  
		//   var state= validateNotEmpty($("#state"),'State is required');
		  // var city= validateNotEmpty($("#city"),'City is required');
		   var address= validateNotEmpty($("#address"),'Address is required');
			var classes= validateNotEmpty($("#class"),'Class is required');	 
				
			//var email=validateBusinessEmail($("#email"),' Email  is required');
     
     // var subject=validateNotEmpty($("#subject"),' Subject is required')
		//var message=validateNotEmpty($("#message"),' Message is required')

        if(fname && last_name && tsertsize && fathername && mobile && email && state && city && classes){
          //  return false;
         
       return true;

        }
        else{
          return false;
        }
	  return false;
  }
  
 /*login page validation  */
  function login_validation(){
	  //alert();
	   var user_id = validateNotEmpty($("#user_id"),' User ID  is required');
	   var password1 = validateNotEmpty($("#password"),'Password is required');
	   
	     if(user_id && password1){  //  return false;
         
       return true;

        }
        else{
          return false;
        }
	  
	  
	 // return false;
	  
  }
  
  function ragistration_validation_teacher(){

	
      var fname= validateNotEmpty($("#first_name"),'First  Name  is required');
	   var last_name= validateNotEmpty($("#last_name"),'Last Name  is required');
	   
	    
	    var tsertsize= validateNotEmpty($("#tsize"),'T-Shert Size is required');
		
		 var fathername= validateNotEmpty($("#father_name"),'Father Name is required');
		  var mobile= validateBusinessNumber($("#mobile"),'Mobile No. is required');
		  var email=validateBusinessEmail($("#email"),' Email  is required');
				
		  
		 // var state= validateNotEmpty($("#state"),'');
			var state=	$("#state").val();
			
			if(state==''){
				$("#se").css("display", "block");
			}
		  
		//   var state= validateNotEmpty($("#state"),'State is required');
		   var city= validateNotEmpty($("#city"),'City is required');
		   var address= validateNotEmpty($("#address"),'Address . is required');
			var classes= validateNotEmpty($("#education"),'education . is required');	 
				
			//var email=validateBusinessEmail($("#email"),' Email  is required');
     
     // var subject=validateNotEmpty($("#subject"),' Subject is required')
		//var message=validateNotEmpty($("#message"),' Message is required')

        if(fname && last_name && tsertsize && fathername && mobile && city  && email && classes){
          //  return false;
         
       return true;

        }
        else{
          return false;
        }
	  return false;
  }
  
  
function checklevel(){
	//alert();
var userid='';
var levelid='';	
var type ='';
var lesson_id='';
userid =$('#user_id').val();
levelid =$('#level_id').val();
type  =$('#type').val();
lesson_id  =$('#lession_id').val();


//alert(type);


if(userid == ''){

loadmodule();

}else if(userid !='' && type != 'student'){
loadmodule();
	
}else{
	
	
	//alert();
	
	
           $.ajax({
                url:siteUrl+"/ajax/checkuserlevel/"+userid+"/"+levelid,
                type:"GET",
                dataType: 'json',
                success: function(data){
				//	alert(data);
					//return false;
                    if(data.status == 'success')
                    {
                      
						 window.location.href = siteUrl+'question/test/'+lesson_id;
					  // window.location.href = siteUrl+'home/business-signup';
                    }
                    else
                    {
						
				$("#forlogin").css("display", "none");
				$("#forlevel").css("display", "block");						
				//$("#forlevel").html("You need to clear level :-"+data.message+" before proceeding  to heigher level <br>");	
				$("#ln").html(data.message);
				
                       loadmodule();
                    }
                }
            });
      
	
	
	
	
	
}



}

function loadmodule(){
	
	// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
/*btn.onclick = function() {
    modal.style.display = "block";
}*/
 modal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	//alert(event.target);
	
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}
  
  
function change_password(){
          
		
		   var old_password1    = validateNotEmpty($("#oldpassword"),'<span style="color:white;margin: 8px 10px 1px 5px;">Old Password is required</span>');
		   
		   
		  
		   var old_password = $('#oldpassword').val(); 
		   
		  
		   
		   var password1 = validateNotEmpty($("#password"),'<span style="color:white;margin: 8px 10px 1px 5px;">Password is required</span>'); 
		  var password			=$('#password').val();
		   
		   
		   
		    var c_password1  = validateNotEmpty($("#c_password"),'<span style="color:white;margin: 8px 10px 1px 5px;">confirm  Password is required</span>');
		   var c_password = $('#c_password').val();
		   
		  
		   
		   if(old_password1 && password1 && c_password1 ){
			   if(validatePassword($("#password"),$("#c_password")))
                {
                   // return true;
                }
				else
                {
                    return false;
                }
		   }
		   
		  
          $.ajax({
                url:siteUrl+'home/changepassword',
                type:"POST",
                dataType: 'json',
				data:{'password':password,'old_password':old_password},
                success: function(data){
					//alert(data);
                    var status=data.success;
					//	alert(status);
                    if(status==true)
                    {	
						//alert();
						//document.getElementById('myModal').style
						//$('#myModal').css("display","none")
						//$("#myModal").fadeOut('slow');
						$("#myModal").hide("slow");
                       
                    }else{
						//alert("");
					}
                   
                },
				
				
          
        });
		
		return false;
   
}


    function PrintElem(elem)
    {
		
		
		    $.ajax({
                url:siteUrl+'Question/printquestion',
                type:"POST",
                dataType: 'json',
				//data:{'question':question},
                success: function(data){
				
                    var status=data.success;
					//alert(data.text_id);
                    if(status==true)
                    {	
						$('#tid').css("display","block")
						//$('#tid').text(data.text_id);
						$('#test_id').text(data.text_id);
						Popup($(elem).html());
						
                       
                    }else{
						
					}
                   
                }
          
        });
		
		
	//	return false;		
       
		
    }

    function Popup(data) 
    {
        var mywindow = window.open('', '', 'height=600,width=1320');
        mywindow.document.write('<html><head><title></title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }
	
function checkdulcate(){

		//alert();
		
		 var firstname = $('#first_name').val(); 
		 var lastname = $('#last_name').val(); 
		 var day = $('#Day').val(); 
		 var month = $('#month').val(); 
		 var year = $('#year').val();
		 var father_name = $('#father_name').val();	
		 var user_type = $('#user_type').val();	
		var age='';
		if(user_type!='student'){
		 age = $('#age').val();	
		}
		//age
		
		 $.ajax({
                url:siteUrl+'ajax/checkduplicate',
                type:"POST",
                dataType: 'json',
				data:{'firstname':firstname,'lastname':lastname,'day':day,'month':month,'year':year,'age':age,'user_type':user_type,'father_name':father_name},
                success: function(data){
					//alert(data);
                    var status=data.status;
						//alert(status);
                    if(status=='duplicate')
                    {	
				
					alert('You seem to be registered already on the site. Please login to your account');
					$('#father_name').val('');	
					$('#first_name').val('');
					$('#last_name').val('');
						
						if(user_type!='student'){
						$('#age').val('16');
						}else{
						$('#Day').val('01');
						$('#month').val('01');	
						$('#year').val('1980');	
						}							
						                       
                    }else{
						
						return true ;
					}
                   
                },
				
				
          
        });
		
		
}	

	
function checkdulcate_edit(){

		//alert();
	//	return  false;
		
		 var firstname = $('#first_name').val(); 
		  var user_id = $('#user_id').val();
		 var lastname = $('#last_name').val(); 
		 var day = $('#Day').val(); 
		 var month = $('#month').val(); 
		 var year = $('#year').val();
		 var father_name = $('#father_name').val();	
		 var user_type = $('#user_type').val();	
		var age='';
		if(user_type!='student'){
		 age = $('#age').val();	
		}
		//age
		
		 $.ajax({
                url:siteUrl+'ajax/checkduplicateedit',
                type:"POST",
                dataType: 'json',
				data:{'firstname':firstname,'lastname':lastname,'day':day,'month':month,'year':year,'age':age,'user_type':user_type,'father_name':father_name,'user_id':user_id},
                success: function(data){
					//alert(data);
                    var status=data.status;
						//alert(status);
                    if(status=='duplicate')
                    {	
				
					alert('You seem to be registered already on the site. Please login to your account');
					$('#father_name').val('');	
					//$('#first_name').val('');
					//$('#last_name').val('');
						
						if(user_type!='student'){
						//$('#age').val('16');
						}else{
						//$('#Day').val('01');
						//$('#month').val('01');	
						//$('#year').val('1980');	
						}							
						                       
                    }else{
						
						return true ;
					}
                   
                },
				
				
          
        });
		
		
}	
function openanyother(value){
		
	if(value=='any other'){
		
		$('#eao').css("display","block");
	}else{
		$('#anyother').val('');
		$('#eao').css("display","none")
	}
	
}

function openanyother_edit(value){
		//alert(value);
	if(value=='any other'){
		
		$('#eao').css("display","block");
	}else{
		$('#anyother').val('');
		$('#eao').css("display","none")
	}
	
}

// *****for show result detail  ***** /

function showresult_detail(test_id){
	//alert(test_id);
	
	 window.location.href = siteUrl+'home/viewResult/'+test_id;
	
	
	
}
 


