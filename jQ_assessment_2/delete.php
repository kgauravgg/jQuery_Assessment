<?php


$q = "delete from items where itemkey =" ;
$query = mysqli_query($con, $q);

if(mysqli_num_rows($query)>0){
    while($result = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $result['itemkey'] ?></td>
            <td><?php echo $result['itemname'] ?></td>
            <td><?php echo $result['itemprice'] ?></td>
            <td><button onclick="getItemDetails(<?php $row['itemkey']?>)">Edit</button></td>
            <td><button onclick="deleteItem(<?php $row['itemkey']?>)">Delete</button></td>
        </tr>
        
        <?php       
    }?>
    <script>
         
    </script>
<?php }
?>


<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'product'); 
if(isset($_POST["delid"]) && !empty($_POST["delid"])){
    
    
    $sql = "DELETE FROM items WHERE itemkey = :delid";
    if($stmt = $pdo->prepare($sql)){
        $stmt->bindParam(":delid", $param_id);
        $param_id = trim($_POST["delid"]);
        if($stmt->execute()){
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    unset($stmt);
    
    unset($pdo);
} else{
    if(empty(trim($_GET["id"]))){
      header("location: error.php");
        exit();
    }
}
?>