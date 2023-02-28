
<?php 

    // Database configuration
$host = "127.0.0.1:3307"; // hostname
$user = "root"; // database username
$password = ""; // database password
$database = "book_shop_db"; // database name

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = " select * from selling_form ";
$result = mysqli_query($conn,$query);

// Close connection
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Seller List</title>	
    <div class="card-header">
		<h3 class="card-title">List of Requests</h3>
		<!-- <div class="card-tools">
			<a href="?page=order/manage_order" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span>  Create New</a>
		</div> -->
	</div>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
<tr>
  <td>ID</td>
  <td>Title</td>
  <td>Author</td>
  <td>Description</td>
  <td>Price</td>
  <td>Image</td>
  <td>Name</td>
  <td>Email</td>
  <td>Action</td>
  <td>Paid</td>
 </tr>
 <colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="20%">
					<col width="10%">
					<col width="10%">
					<col width="15%">
				</colgroup>

 <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $ID = $row['id'];
                                        $Title = $row['title'];
                                        $Author = $row['author'];
                                        $Description = $row['description'];
                                        $Price = $row['price'];
                                        $Image = $row['image_url'];
                                        $Name = $row['seller_name'];
                                        $Email = $row['seller_email'];
?>
                                    <tr>
                                        <td><?php echo $ID ?></td>
                                        <td><?php echo $Title ?></td>
                                        <td><?php echo $Author ?></td>
                                        <td><?php echo $Description ?></td>
                                        <td><?php echo $Price ?></td>
                                        <td><?php echo $Image ?></td>
                                        <td><?php echo $Name ?></td>
                                        <td><?php echo $Email ?></td>
																				<td align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">
									<?php if($row['paid'] == 0 ): ?>
				                    <a class="dropdown-item accept_request" href="javascript:void(0)"  data-id="<?php echo $row['id'] ?>">Mark as Paid</a>
									<?php endif; ?>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
				                  </div>
							</td>
							<td class="text-center">
                                <?php if($row['paid'] == 0): ?>
                                    <span class="badge badge-light">No</span>
                                <?php else: ?>
                                    <span class="badge badge-success">Yes</span>
                                <?php endif; ?>
                            </td>
                                    </tr>        
                            <?php 
                            
                                    }  
                                    
                            ?> 
                              
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
          $(document).ready(function(){
		$('.delete_data').click(function(){
			_conf("Are you sure to delete this order permanently?","delete_request",[$(this).attr('data-id')])
		})
    $('.accept_request').click(function(){
			_conf("Are you sure to accept this request?","accept_request",[$(this).attr('data-id')])
		})
		$('.table').dataTable();
  })
  function delete_request($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_request",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("sorry An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
  function accept_request($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=accept_request",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("sorry An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("oh An error occured.",'error');
					end_loader();
				}
			}
		})
	}
        </script>
    
</body>
</html>