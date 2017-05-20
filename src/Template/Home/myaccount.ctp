 <?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="wrapper">
	<div class="container">
    	<div class="my-account">
        	<div id="tabs">
                <?php echo $this->element(FRONTEND.'/menu'); ?>
                <div id="a" class="right-cntent">
                    <div class="my-profile">
                    	<div class="heading"><h3>My Profile</h3></div>
                    	<table width="100%;" border="1px solid #f7f7f7;" style="border-collapse:collapse;">
                        	<tbody>
                            	<tr>
                                	<th>Photo</th>
                                    <td>
									
									<?php
											if($user['photo']!=""){
											 $image_path='user_photo/'.$user['photo'];
							echo $this->Html->image($image_path,['style'=>'display: block; margin: 0;  width: 20%;']);
								  //echo Ucfirst($user['photo']);
											}else{

				
							echo $this->Html->image('dummy-image.jpg',['style'=>'display: block; margin: 0;  width: 20%;']);
								  //echo Ucfirst($user['photo']);

											}?> 
									
									
											</td>
                                </tr>
                                <tr>
                                	<th>User ID</th>
                                    <td><?php echo ($user['user_id']); ?></td>
                                </tr>
                                <tr>
                                	<th>First Name</th>
                                    <td><?php echo Ucfirst($user['first_name']); ?> </td>
                                </tr>
                                <tr>
                                	<th>Last Name</th>
                                    <td><?php echo Ucfirst($user['last_name']); ?> </td>
                                </tr>
                                <tr>
                                	<th>Father Name</th>
                                    <td><?php echo Ucfirst($user['father_name']); ?> </td>
                                </tr>
                                <tr>
                                	<th>Gender</th>
                                    <td><?php echo Ucfirst($user['gender']); ?></td>
                                </tr>
                             <?php if($user['type']!="student"){  ?>
								<tr>
								 <th>Age  </th>
                                  <td><?php echo $user['age']; ?> </td>
                                </tr>
								
								<?php }else { ?>
								<tr>
								 <th>DOB  </th>
                                  <td><?php echo date('d-m-Y',strtotime($user['dob'])); ?> </td>
                                </tr>
								<?php  } ?>
                              <tr>
								 <th>T-Shirts Size  </th>
                                  <td><?php echo $user['tsize']; ?> </td>
                                </tr>
                                <tr>
                                	<th>Email</th>
                                    <td><?php echo $user['email']; ?></td>
                                </tr>
                                <tr>
								 <th>Mobile  </th>
                                  <td><?php echo $user['mobile']; ?> </td>
                                </tr>
                               <tr>
								 <th>Address  </th>
                                  <td><?php echo $user['address']; ?> </td>
                                </tr>
<tr>
								 <th>State  </th>
                                  <td><?php echo $state[$user['state']]; ?> </td>
                                </tr>
                               <tr>
								 <th>City  </th>
                                  <td><?php echo $city[$user['city']]; ?> </td>
                                </tr>
                                <?php if($user['type']!="student"){  ?>
								
								<tr>
								 <th>Education </th>
                                  <td><?php
										if($user['education']=='any other'){
											echo $user['anyother'];
										}else{
											 echo $user['education'];
										}

								  ?> </td>
                                </tr>
								
								<?php } else{  ?>
								<tr>
								 <th>Class </th>
                                  <td><?php echo $user['user_class']."th"; ?> </td>
                                </tr>
								<?php  } ?>
                               <tr>
								 <th>Previous Shivir  <?php if($user['type']=="teacher"){ echo "Tought"; } else if($user['type']=="volunteer"){ echo "Volunteer";} else{ echo "Attend";}  ?>  </th>
                                  <td><?php echo $user['shiver_attend']; ?> </td>
                                </tr>
								
								<?php if($user['type']=="teacher"){  ?>
								
								<tr>
								 <th>  Are you to teach out side your city   </th>
                                  <td><?php 
								  if($user['outcity_teach']=='Y'){
									  echo "Yes";
								  }else{
									  echo "No";
								  }
								  ?> </td>
                                </tr>
								<?php  } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
				

</div>	
				
	
	
		
	<script>
	
/*	
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

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
*/


</script>		