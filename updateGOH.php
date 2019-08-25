<?php
require_once "connect.php";
$sql = "SELECT * FROM GuestsOfHonour ORDER BY PlaceOrder ASC";
$result = $conn->query($sql);
$conn->close();
?>
<!doctype html>
<html>
    <head>
        
        <title>Change Order of Images in Photo Gallery with Drag and Drop using PHP AJAX</title>
    </head>
    <body>
        <div id="gallery">
        
        <div id="image-container">
        <h2>Change Order of Images in Photo Gallery with Drag and Drop using PHP AJAX</h2>
        <div id="txtresponse" > </div>
            <ul id="image-list" >
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $imageId = $row['ID'];
                        $imageName = $row['Name'];
                        $imagePath = $row['ImgLoc'];

                        echo '<li id="image_' . $imageId . '" >
                        <img src="uploads/GOHImg/' . $imagePath . '" alt="' . $imageName . '" style="width:100px; height:100px;"></li>';
                    }
                }
                ?>
            </ul>

        </div>            
        <div id="submit-container"> 
            <input type='button' class="btn-submit" value='Submit' id='submit' />
        </div>
        </div>
        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
    $(document).ready(function () {
        var dropIndex;
        $("#image-list").sortable({
            	update: function(event, ui) { 
            		dropIndex = ui.item.index();
            }
        });

        $('#submit').click(function (e) {
            var imageIdsArray = [];
            $('#image-list li').each(function (index) {
                if(index <= dropIndex) {
                    var id = $(this).attr('id');
                    var split_id = id.split("_");
                    imageIdsArray.push(split_id[1]);
                }
            });

            $.ajax({
                url: 'reorderUpdate.php',
                type: 'post',
                data: {imageIds: imageIdsArray},
                success: function (response) {
                   $("#txtresponse").css('display', 'inline-block'); 
                   $("#txtresponse").text(response);
                }
            });
            e.preventDefault();
        });
    });

</script>
    </body>
</html>