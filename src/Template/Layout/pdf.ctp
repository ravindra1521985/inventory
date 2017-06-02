 
   <!-- <link rel="stylesheet" type="text/css" href="webroot/css/Frontend/main.css">-->
<?php 


header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="filename.pdf"');
//echo $content_for_layout;

echo $this->fetch('content');

?>

<style>



</style>