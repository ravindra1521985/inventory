$(document).ready(function(){
     
    //function to populate city on change of state
   
    
    //function to populate course on change of level
  
  
  
  
  //  //function to populate lession  on change of course

  
  
  /*

$("#search").on("keyup", function() {
	
	
	var value = $(this).val();

	  var patt = new RegExp(value, "i");
	 

	  $('#filter').find('tr').each(function() {

	    if (!($(this).find('td').text().search(patt) >= 0)) {

	      $(this).not('.myHead').hide();

	    }

	    if (($(this).find('td').text().search(patt) >= 0)) {

	      $(this).show();

	    }

	  });
	
		
	
});
  */
  
   $("#customer").blur(function() {
   		
        var val = $('#customer').val()
        var xyz = $('#customer1 option').filter(function() {
            return this.value == val;
        }).data('xyz');
     //   var msg = xyz ? 'xyz=' + xyz : 'No Match';
      
 	//alert(xyz);
        if(xyz){
        	//!='' && xyz != 'undefined'
         $.ajax({
                type: "GET",
               url: siteUrl+"ajax/getcustomer/"+xyz,
                //url:siteUrl,
                dataType: 'Json',
                error: function() {
                    alert('Unable to process request.');
                },
                success: function(Jdata){

                   $('#phone').val(Jdata.phone);
                   $('#c_id').val(Jdata.id);
                    $('#email').val(Jdata.email);
                    $('#cr_amount').val(Jdata.cr_amount);
                    //$('#cr_blance1').val(Jdata.cr_amount);
                     $('#dr_amount').val(Jdata.dr_amount);
                      //$('#blance_due').val(Jdata.dr_amount);
                      $('#detail').val(Jdata.detail);

                    $('#phone').attr('readonly', 'true');
                   $('#c_id').val(Jdata.id);
                   $('#email').attr('readonly', 'true');
                   // $('#cr_amount').val(Jdata.cr_amount);
                     $('#cr_amount').attr('readonly', 'true');
                     // $('#cr_blance1').attr('readonly', 'true');
                     // $('#blance_due').attr('readonly', 'true');
                      $('#dr_amount').attr('readonly', 'true');
                      $('#detail').attr('readonly', 'true');
                      //$('#detail').val(Jdata.dr_amount);

                },
               // beforeSend: function() {
               //   show_hie_loader();

              //  },
              //  complete: function() {
              //    show_hie_loader();
               // }
            });
     }
     else{
     	 		 $('#phone').val('');
                   $('#c_id').val('');
                    $('#email').val('');
                    $('#cr_amount').val(0);
                      $('#dr_amount').val(0);
                       $('#detail').val('');
                    $('#phone').attr('readonly', false);
                     $('#email').attr('readonly', false);
                   // $('#cr_amount').val(Jdata.cr_amount);
                     $('#cr_amount').attr('readonly', false);
                     // $('#cr_blance1').attr('readonly', 'true');
                     // $('#blance_due').attr('readonly', 'true');
                      $('#dr_amount').attr('readonly', false);
                      $('#detail').attr('readonly', false);


     }


});/*end of document ready*/


//var start = new Date('01-01-2016');
// set end date to max one year period:
//var end = new Date(new Date().setYear(start.getFullYear()+2));

// payment due date picker validation


$('#fdate').datepicker({
	 format: 'dd-mm-yyyy',
    	//startDate : start,
     autoclose: true,
   // endDate   : end
 
// update "toDate" defaults whenever "fromDate" changes
}).on('changeDate', function(){
    // set the "toDate" start to not be later than "fromDate" ends:
    $('#tdate').datepicker('setStartDate',$(this).val());

}); 

$('#tdate').datepicker({
	format: 'dd-mm-yyyy',
  //  startDate : start,
     autoclose: true,
  //  endDate   : end
     
// update "fromDate" defaults whenever "toDate" changes
}).on('changeDate', function(){
    // set the "fromDate" end to not be later than "toDate" starts:
    $('#fdate').datepicker('setEndDate',$(this).val());
});






  /*

$("#search").on("keyup", function() {
  

  
  var value = $(this).val();

  alert(value);

   // var patt = new RegExp(value, "i");

   // alert(patt);
   

    $('#filter').find('tr').each(function() {

      if (!($(this).find('td').text().search(value) >= 0)) {

        $(this).not('.myHead').hide();

      }

      if (($(this).find('td').text().search(value) >= 0)) {

        $(this).show();

      }

    });
    
  
  
  
  
});*/






   });


function searchitemname(value){

 var input, filter, table, tr, td, i;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("filter");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
       if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }


}

function searchcode(value){

 var input, filter, table, tr, td, i;
  input = document.getElementById("search1");
  filter = input.value.toUpperCase();
  table = document.getElementById("filter");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
       if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }


}





/*function getitemlist(){

 			$.ajax({
                type: "GET",
               url: siteUrl+"admin/invoice/getitem",
                //url:siteUrl,
                dataType: 'html',
               //dataType: 'json',
                error: function() {
                    alert('Unable to process request.');
                },
                success: function(jdata){

             alert(jdata);
             $('#itembox').html(jdata);
                 // document.getElementById("itembox").innerHTML = Jdata;

                },
                
            });
     }*/
    


 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }

	
function calculateSum() {

     var sum = 0;
     //iterate through each textboxes and add the values
     $(".txt").each(function () {

         //add only if the value is number
         if (this.value !='NaN' && this.value.length != 0) {
             sum += parseFloat(this.value);
         }

     });
   


    document.getElementById("subtotal").value=sum.toFixed(2);

    tax=document.getElementById("tax").value;
    
    var totaltax=(sum * parseFloat(tax))/100;

    

    var total=totaltax+parseFloat(sum);
  // document.getElementById("totalamount").value=sum.toFixed(2);
   document.getElementById("tax_amount").value=totaltax;
  document.getElementById("totalamount").value=total;
   
 }



function calculateSum1() {

   

   var tax=document.getElementById("tax").value;

  // alert(tax);
   if(tax==''){
    tax=0;    
    document.getElementById("tax_amount").value=0;
   }else{

      document.getElementById("tax_amount").value = (parseFloat(tax)*parseFloat(document.getElementById("subtotal").value)/100);
   }

   var totaltaxamount=document.getElementById("tax_amount").value;

   //var total_amount=document.getElementById("totalamount").value+parseFloat(totaltaxamount);
   var total_amount=parseFloat(document.getElementById("subtotal").value) + parseFloat(totaltaxamount);
   document.getElementById("totalamount").value=total_amount;
   var paid_amount=document.getElementById("paid_amount").value;
   if(paid_amount==''){
   	paid_amount=0;
   }
   var creadetamount=document.getElementById("cr_blance1").value;
    if(creadetamount==''){
   	creadetamount=0;
   }

   var dr_amount=document.getElementById("dr_amount").value;
   if(dr_amount==''){
   	dr_amount=0;
   }


    //alert(paid_amount);
   // alert(creadetamount);
   // alert(total_amount);
   // alert(dr_amount);


		if(parseFloat(paid_amount)+parseFloat(creadetamount) > parseFloat(total_amount)+parseFloat(dr_amount)){
			alert("Please enter valid amount.");
				document.getElementById("paid_amount").value=0;
				document.getElementById("cr_blance1").value=0;
        document.getElementById("blance_due").value=0;
		}


   if(parseFloat(total_amount) >= (parseFloat(paid_amount)+parseFloat(creadetamount))-(parseFloat(dr_amount))){

   	var due_amount = parseFloat(total_amount)-(parseFloat(paid_amount)+parseFloat(creadetamount));

        var totaldueblance=parseFloat(due_amount)+(parseFloat(dr_amount));
   			document.getElementById("blance_due").value=totaldueblance.toFixed(2);

   }
   
 }

	
	
function amoutcal(id)
{   

  var res = id.split('_');
    var qty =document.getElementById("stockqty_"+res[1]).value;

    if(qty==""){

      qty=0;
    }


    var stockvalue=document.getElementById("qty_"+res[1]).value;

if(stockvalue==''){
stockvalue=0;

}
   
    if(parseFloat(qty) > parseFloat(stockvalue)){
      alert("Qunatity is more than stock");
    //  alert();
      document.getElementById("stockqty_"+res[1]).value='';
       document.getElementById("amount_"+res[1]).value='';
        calculateSum();
      return false;
    }
        

     // var rate = parseFloat(document.getElementById("productrate_"+res[1]).value);

         var rate = parseFloat(document.getElementById("mtrate_"+res[1]).value);
      
      totalamount=0;
      var totalamount = parseFloat(qty) * parseFloat(rate);
     // alert()
      if(totalamount=='NaN'){
       // alert(totalamount);
       totalamount=0;
     }
      
        document.getElementById("amount_"+res[1]).value=totalamount;
      
      calculateSum();
      //alert(totalamount);
      
    
}
	

 
function addRow(tableID) 
{
  //alert(tableID);
  var table = document.getElementById(tableID);
  var rowCount = table.rows.length;
    //alert(rowCount);
  var row = table.insertRow(rowCount);
  document.getElementById("hiditemcount").value=rowCount;
  var row1=document.getElementById("rowcount1").value;
  var rr=parseInt(row1)+1;
  document.getElementById("rowcount1").value=rr;
  document.getElementById("edit_cnt").value=rr;
  document.getElementById("hiditemcount").value=rr;
  var colCount = table.rows[0].cells.length;
  for(var i=0; i<colCount; i++) { 
  var newCount=parseInt(rowCount)+parseInt(edit_cnt)-1;
  var newCount=parseInt(rowCount);
  var newcell = row.insertCell(i);
  newcell.style.background='#FAFAFA';
  //newcell.valign='top';
  //newcell.className='';
  /*$('.datepicker').removeClass('hasDatepicker').datepicker({ dateFormat: 'dd/mm/yy',changeMonth: true, changeYear: true,yearRange: '-80:+20'});*/
  //alert(rr);
  newcell.innerHTML = table.rows[0].cells[i].innerHTML;
  switch(newcell.childNodes[0].type) 
  {
  case "text":
  newcell.childNodes[0].value = "";
  //var nod_id = newcell.childNodes[0].id;
  var nod_id = newcell.childNodes[0].id.split("_");
  if(!isNaN(nod_id[1]))
  newcell.childNodes[0].id = nod_id[0]+'_'+rr;
  else
  newcell.childNodes[0].id = nod_id[0]+'_'+rr;
  //newcell.childNodes[0].id = newcell.childNodes[0].id+'_'+newCount;
  
  //newcell.childNodes[0].name = newcell.childNodes[0].name;
  
  break;
  case "hidden":
  newcell.childNodes[0].value = "";
  var nod_id = newcell.childNodes[0].id.split("_");
  if(!isNaN(nod_id[1]))
  newcell.childNodes[0].id = nod_id[0]+'_'+rr;
  else
  newcell.childNodes[0].id =nod_id[0]+'_'+rr;
  
  break;
  case "button":
  var nod_id = newcell.childNodes[0].id.split("_");
  if(!isNaN(nod_id[1]))
  newcell.childNodes[0].id = nod_id[0]+'_'+rr;
  else
  newcell.childNodes[0].id = nod_id[0]+'_'+rr;
  
  break;
  case "checkbox":
  newcell.childNodes[0].checked = false;
  var nod_id = newcell.childNodes[0].id.split("_");
  if(!isNaN(nod_id[1]))
  newcell.childNodes[0].id = nod_id[0]+'_'+rr;
  else
  newcell.childNodes[0].id = nod_id[0]+'_'+rr;
  
  break;
  case "select-one":
  newcell.childNodes[0].selectedIndex = 0;
  var nod_id = newcell.childNodes[0].id.split("_");
  if(!isNaN(nod_id[1]))
  newcell.childNodes[0].id = nod_id[0]+'_'+rr;
  else
  newcell.childNodes[0].id =nod_id[0]+'_'+rr;
  
  break;  
  }
    //document.getElementById("stock_perunit_"+rowCount).value=1;
  }
  
  
}

function checkdulicate(id){

    // alert(id);
      var productid=[];
      var flag=0;
      $(".pid").each(function () {

         //add only if the value is number
         if (this.value !='NaN' && this.value.length != 0) {
            // sum += parseFloat(this.value);
           
            productid.push(this.value);
         }

     });

     // alert(productid);
      if($.inArray(id, productid) >=0){
              alert("Item all ready added");
             flag=1;
               }

      return flag;
      /*alert(productid);
      if($.inArray(id, productid)==0){
        alert("Item all ready added");
        return 1;
      }*/
 }




function deleteRowOrder(tableID) 
{
  try 
  {
  var table = document.getElementById(tableID);
  //alert(table);
  var rowCount = table.rows.length;
 // alert(rowCount);
  for(var i=0; i<rowCount; i++) 
  {
  var row = table.rows[i];
  var chkbox = row.cells[0].childNodes[0];
  if(null != chkbox && true == chkbox.checked) 
  {
  if(rowCount <= 1) 
  {
  alert("Cannot delete all the rows.");
  break;
  }
  table.deleteRow(i);
  rowCount--;
  i--;
  }
  }
  document.getElementById("hiditemcount").value=(rowCount);   }
  catch(e) 
  {
 // alert(e);
  }
  calculateSum()
}



function deleteRowOrder1(tableID,rowid) 
{


  try 
  {
  var table = document.getElementById(tableID);
  //alert(table);
  var rowCount = table.rows.length;
 // alert(rowCount);
  for(var i=0; i<rowCount; i++) 
  {
  var row = table.rows[i];
 // var chkbox = row.cells[0].childNodes[0];
 // if(null != chkbox && true == chkbox.checked) 
  {
  if(rowCount <= 1) 
  {
  alert("Cannot delete all the rows.");
  break;
  }

 // alert(rowid);
 // alert(i);
  if(rowid-1==i){
  table.deleteRow(i);
  rowCount--;
  i--;
   break;
  }


  }
  }
  document.getElementById("hiditemcount").value=(rowCount);  }
  catch(e) 
  {
 // alert(e);
  }
  calculateSum()
}


function getItemsList(id,code,shade,desc,qty,ctr)
{  
  
 // alert(id);
  var dup='empty';
  
  var itemcount=parseInt(document.getElementById('rowcount1').value);
  //var itemcount=parseInt(document.getElementById('rowcount1').value)+1;
  
  var edit_cnt=document.getElementById('edit_cnt').value;
 // alert(edit_cnt);
  if(edit_cnt=='')
  {
    var counter=1;
  } 
  else if(edit_cnt>itemcount)
  {
    var counter=edit_cnt;
    var itemcount=parseFloat(counter)+parseFloat(itemcount);
  }
  else
  {
    var counter=edit_cnt;
  }
  //alert(ctr);
  //alert(counter);
//IF WE CHECK THE CHECK BOX FOR SELECT ANY ITEM***********************START HERE******************************************
  if(document.getElementById("row_id_"+ctr).checked==true)
  {
     // alert(ctr);
     
    //var f=checkdulicate(id);

   // alert(f);

     /* if(f==1){
        return false;
      }*/
            //alert("fdfs");
        if(ctr!=0)
        {
        var data=addRow('dataTable');         
          } 
        document.getElementById('product_'+counter).value = id;
        document.getElementById('productname_'+counter).value = code;
        document.getElementById('productcode_'+counter).value = shade;
        document.getElementById('productrate_'+counter).value = desc; 
         document.getElementById('mtrate_'+counter).value = desc; 
         document.getElementById('qty_'+counter).value = qty;       
                  
           
   
    
  }
  if(document.getElementById("row_id_"+ctr).checked==false)
  {


       if(ctr!=0)
        {

          $(".pid").each(function () {

         //add only if the value is number
         if (this.value !='NaN' && this.value.length != 0) {
            
            if(this.value==id){

                $('#'+this.id).parents('tr').remove();

               //deleteRowOrder1('dataTable',ctr);

            }
         }

     });

            //  alert('#product_'+counter);


             // var result= $('#product_'+counter).parent().find('input[type="text"]').val();

            // document.getElementById('product_'+counter).value = id;

          //  alert(result);

        
            //  deleteRowOrder1('dataTable',ctr);
   
     
          } 

     // alert();
  }


//IF WE UNCHECK THE CHECK BOX FOR DESELECT ANY ITEM***********************END HERE******************************************
}

function checkuserid(){

    //alert();
    
     var user_id = $('#user_id').val(); 
    
    //age
    
     $.ajax({
                url:siteUrl+'ajax/checkuser',
                type:"POST",
                dataType: 'json',
              data:{'user_id':user_id},
                success: function(data){
          //alert(data);
                    var status=data.status;
            //alert(status);
                    if(status=='Success')
                    { 
        
         // alert('User Id Is All Ready Exit');
          $('#user_id').val(''); 
          $('#user_id_error').text('User already exists');  
          $('#user_id_error').css('display','block'); 
              
            }   
              else{
            
             $('#user_id_error').css('display','none'); 
           
          }
                   
          },        
          
        });
   }
    
    function validation(){


      var password=$("#password").val();
     var cpassword=$("#c_password").val();
      if(password!='' && cpassword!=''){
      if(password !== cpassword)
        {

            $("#pass_error").text('Password Mismatch');
            $("#pass_error").css("display",'block');
            return false;
        }else{
           $("#pass_error").css("display",'none');
        }
      }
    

    }
    
