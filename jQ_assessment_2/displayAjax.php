<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'product'); 

$q = "select * from items";
$query = mysqli_query($con, $q);

if(mysqli_num_rows($query)>0){
    while($result = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $result['itemkey'] ?></td>
            <td><?php echo $result['itemname'] ?></td>
            <td><?php echo $result['itemprice'] ?></td>
            
            <td><button onclick="getItemDetails(<?php $row['itemkey'] ?>)">Edit</button></td>
            <td><button onclick="deleteItem(<?php $row['itemkey'] ?>)">Delete</button></td>
        </tr>
        
        <?php       
    } 
}
?>