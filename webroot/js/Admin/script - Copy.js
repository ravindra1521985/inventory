    $(document).ready(function() {
    $(".calbtn").click(function() {
        $(".topHeader").slideToggle("slow");
    });
	
	$(".helpClickBtn").click(function() {
        $(".hpBtn").toggle();

    });
	var $content, $modal, $apnData, $modalCon; 

      $content = $(".min");   


      //To fire modal
      $(".mdlFire").click(function(e){

          e.preventDefault();

          var $id = $(this).attr("data-target"); 

          $($id).modal({backdrop: false, keyboard: false}); 

        }); 
 

      $(".modalMinimize").on("click", function(){

                  $modalCon = $(this).closest(".mymodal").attr("id");  

                  $apnData = $(this).closest(".mymodal");

                  $modal = "#" + $modalCon;

                  $(".modal-backdrop").addClass("display-none");   

                  $($modal).toggleClass("min");  

                    if ( $($modal).hasClass("min") ){ 

                        $(".minmaxCon").append($apnData);  

                        $(this).find("i").toggleClass( 'fa-minus').toggleClass( 'fa-clone');

                      } 
                      else { 

                              $(".container").append($apnData); 

                              $(this).find("i").toggleClass( 'fa-clone').toggleClass( 'fa-minus');

                            };

                  });

        $("button[data-dismiss='modal']").click(function(){   

                $(this).closest(".mymodal").removeClass("min");

                $(".container").removeClass($apnData);   

                $(this).next('.modalMinimize').find("i").removeClass('fa fa-clone').addClass( 'fa fa-minus');

              }); 
	});
	
	
	$(function(){
	  $("[data-toggle='tooltip']").tooltip();
	  
	$('#slide-submenu').on('click',function() {			        
        $(this).closest('.list-group').fadeOut('slide',function(){
        	$('.mini-submenu').fadeIn();	
        });
		$(".wholebody").addClass("col-md-11 col-sm-11").removeClass("col-md-9 col-sm-9");
        $(".leftnavbody").addClass("col-sm-1 col-md-1").removeClass("col-sm-3 col-md-3");
      });

	$('.mini-submenu').on('click',function(){		
        $(this).next('.list-group').toggle('slide');
        $('.mini-submenu').hide();
		$(".wholebody").removeClass("col-md-11 col-sm-11").addClass("col-md-9 col-sm-9");
        $(".leftnavbody").removeClass("col-sm-1 col-md-1").addClass("col-sm-3 col-md-3");
	})
})
$( "#expand1" ).click(function() {
  $( ".hiddenDivCantt1" ).toggle( "slow" );
});
$( "#expand2" ).click(function() {
  $( ".hiddenDivCantt2" ).toggle( "slow" );
});
$( "#expand3" ).click(function() {
  $( ".hiddenDivCantt3" ).toggle( "slow" );
});
$( "#expand4" ).click(function() {
  $( ".hiddenDivCantt4" ).toggle( "slow" );
});
$( "#expand5" ).click(function() {
  $( ".hiddenDivCantt5" ).toggle( "slow" );
});
$( "#expand6" ).click(function() {
  $( ".hiddenDivCantt6" ).toggle( "slow" );
});
$( "#expand7" ).click(function() {
  $( ".hiddenDivCantt7" ).toggle( "slow" );
});