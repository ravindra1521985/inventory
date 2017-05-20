<footer>
<div id="popUpModel" class="modal" role="dialog" style="100%">
	<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" style="text-align: center;">
				<img id="popUpImage" width="auto" height="100%" alt="No Image"/>
			</div>
			<!--div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div-->
		</div>
		
	</div>
</div>
<?php  if($controller == "upload"): ?>
<script>
$("table").on("click","img",function(){
	var pop = $(this).attr("src");
	$("#popUpImage").attr("src",pop);
	$("#popUpModel").show();
});
	$("#popUpModel .close").click(function(){
		$("#popUpModel").hide();
	});
</script>
<style>
	.modal-header {
    padding: 0 !important;
    border-bottom: none !important;
	}
	.modal {
    top: -141px !important;
	}
	.modal-dialog {
 
    width: 700px;
	}
</style>

<?php endif; ?>
 </footer>