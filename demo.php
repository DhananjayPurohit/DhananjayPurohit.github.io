<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Drag and Drop table rows in PHP Mysql- ItSolutionStuff.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    <form method="post" class="w3-container w3-card-4 w3-margin" enctype="multipart/form-data" action="reorderUpdateAl.php">      
  <div class="container">
        <h2 class="w3-center">Reorder Alumni</h2>
        <table class="table table-bordered">
            <tr>
                <th>Order</th>
                <th>Name</th>
                <th>Designation</th>
            </tr>
            <tbody class="row_position">
            <?php


            include ('connect.php');


            $sql = "SELECT ID, PlaceOrder, Name, Designation FROM Alumni ORDER BY PlaceOrder ASC";
            $users = $conn->query($sql);
            while($user = $users->fetch_assoc()){


            ?>
                <tr  id="<?php echo $user['ID'] ?>">
                    <td><?php echo $user['PlaceOrder'] ?></td>
                    <td><?php echo $user['Name'] ?></td>
                    <td><?php echo $user['Designation'] ?></td>
                </tr>
            <?php } 
            mysqli_close($conn);?>
            </tbody>
        </table>
    </div> 
    <script type="text/javascript">
    $( ".row_position" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    });


    function updateOrder(data) {
        $.ajax({
            url:"reorderUpdateAl.php",
            type:'post',
            data:{position:data},
            success:function(){
                alert('your change successfully saved');
            }
        })
    }
</script>

        </form>
        </body>
</html>