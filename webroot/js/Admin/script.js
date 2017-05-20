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


// for use decimal  number  formate

$('.number').keypress(function(event) {
    if (event.which != 46 && (event.which < 47 || event.which > 59))
    {
        event.preventDefault();
        if ((event.which == 46) && ($(this).indexOf('.') != -1)) {
            event.preventDefault();
          }
        }
    
        
	});



 $(".numberp").keydown(function(event) {
        // Allow only backspace and delete
        if ( event.keyCode == 46 || event.keyCode == 8 ) {
            // let it happen, don't do anything
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57 ) {
                event.preventDefault(); 
            }   
        }
    });

	
	 });




  


function goback() {
    window.history.back();
}

 







