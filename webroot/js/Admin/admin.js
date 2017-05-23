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
  
   $("#customer").select(function() {
   		
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
                      $('#detail').val(Jdata.dr_amount);

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
                    $('#cr_amount').val('');
                      $('#dr_amount').val('');
                       $('#detail').val(Jdata.detail);

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



   });


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
   
   document.getElementById("totalamount").value=sum.toFixed(2);
   
 }



function calculateSum1() {

   
   var total_amount=document.getElementById("totalamount").value;
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


		if(parseFloat(paid_amount)+parseFloat(creadetamount) > parseFloat(total_amount)+parseFloat(dr_amount)){
			alert("Please enter valid amount.");
				document.getElementById("paid_amount").value=0;
				document.getElementById("cr_blance1").value=0;
		}


   if(parseFloat(total_amount) >= (parseFloat(paid_amount)+parseFloat(creadetamount))-(parseFloat(dr_amount))){

   	var due_amount = parseFloat(total_amount)-(parseFloat(paid_amount)+parseFloat(creadetamount));
   			document.getElementById("blance_due").value=parseFloat(due_amount)+(parseFloat(dr_amount));
   }
   
 }

	
	
function amoutcal(id)
{   

  var res = id.split('_');
    var qty =document.getElementById("stockqty_"+res[1]).value;

    var stockvalue=document.getElementById("qty_"+res[1]).value;

   
    if(parseFloat(qty) > parseFloat(stockvalue)){
      alert("Qunatity is more than stock");
      document.getElementById("stockqty_"+res[1]).value='';
      return false;
    }
        
      var rate = document.getElementById("productrate_"+res[1]).value;
      
      
      var totalamount = parseFloat(qty) * parseFloat(rate);
      
      //alert(totalamount);
      
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
  newcell.style.background='#fff';
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
     
    var f=checkdulicate(id);

   // alert(f);

      if(f==1){
        return false;
      }
            //alert("fdfs");
        if(ctr!=0)
        {
        var data=addRow('dataTable');         
          } 
        document.getElementById('product_'+counter).value = id;
        document.getElementById('productname_'+counter).value = code;
        document.getElementById('productcode_'+counter).value = shade;
        document.getElementById('productrate_'+counter).value = desc;  
         document.getElementById('qty_'+counter).value = qty;       
                  
           
    
    
  }

//IF WE UNCHECK THE CHECK BOX FOR DESELECT ANY ITEM***********************END HERE******************************************
}