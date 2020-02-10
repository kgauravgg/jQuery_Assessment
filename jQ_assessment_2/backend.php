<?php

$con = mysqli_connect('localhost', 'root');
// if($con){
//     echo("success");
// }
//$dbs = 
mysqli_select_db($con, 'product');
// if($dbs){
//     echo("hii");
// }

extract($_POST);

// if(isset($_POST['readrecord'])){
//     $data = '<table class="table table-striped table-bordered text-center">
//     <thead>
//         <th>Product id</th>
//         <th>Product Name</th>
//         <th>Price</th>
//         <th>Edit Action</th>
//         <th>Delete Action</th>
//     </thead>
// </table>';
// $displayquery = "select * from items";
// $result = mysqli_query($con, $displayquery);
// if(mysqli_num_rows($result)>0){
//     $number = 1;
//     while($row = mysqli_fetch_array($result)){
//         $data .= '<tr>
//                 <td>'.$number.'</td>
//                 <td>'.$row['itemkey'].'</td>
//                 <td>'.$row['itemname'].'</td>
//                 <td>'.$row['itemprice'].'</td>
//                 <td><button onclick="getItemDetails('.$row['itemkey'].')">Edit</button></td>
//                 <td><button onclick="deleteItem('.$row['itemkey'].')">Delete</button></td>
//         </tr>';
//         $number++;
//         }
//     }
//     $data .='</table>';
//     echo $data;
// }


if(isset($_POST['additems'])){
    $q = "insert into items (itemkey, itemname, itemprice) values ('$itemkey', '$itemname', '$itemprice')";
    $query = mysqli_query($con, $q);
    // echo "<script>window.location.href='index.php';</script>";
    // exit;
    header("Location:index2.php");
        //echo ("Data inserted");
}

?>
