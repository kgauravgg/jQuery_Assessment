
<html>
<head>
    <title>jQuery Assessment 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
    <form action="backend.php" method="POST">
        <input type="text" name="itemkey" id="itemkey" placeholder="Product Key">
        <input type="text" name="itemname" id="itemName" placeholder="Product Name">
        <input type="text" name="itemprice" id="itemprice" placeholder="Product Price">
        <button value="additems" id="additems" name="additems">Add Item</button>
        <!--<button value="remove" id="remove" name="remove">Remove Item</button> 
        <button value="update" id="update" name="update">Update Item</button>-->
    </form>
</div>
<div>
    <table class="table table-striped table-bordered text-center">
        <thead class="text-center">
            <th>Key</th>
            <th>Procuct Name</th>
            <th>Price</th>
            <th>Edit Action</th>
            <th>Delete Action</th>
        </thead>
        <tbody id="responce">

        </tbody>

    </table>
</div>
<script>
    display();
    function display() { 
        $.ajax({
        url : 'displayAjax.php', 
        type: 'post',
        success: function(responceData){
            $('#responce').html(responceData);
        }
    });
     }
    
    
    function additem(){
        var itemkey = $('#itemkey').val();
        var itemName = $('#itemName').val();
        var itemprice = $('#itemprice').val();
        $.ajax({
            url:"backend.php",
            type: 'post',
            data : {
                itemkey:itemkey,
                itemName: itemName,
                itemprice: itemprice
            },
            success: function(data, status){
                readRecords();
            }
        })
    }
    function getItemDetails(editId){
            return 0;
        }

    function deleteItem(delId){
        var conf = confirm("Are You Sure !!!");
        if(conf==true){
            $.ajax({
                url : "delete.php",
                type: 'post',
                data : {delid:delid},
                success : function (data, status) {
                    display();
                }
            })
        }
    }   
</script>  
</body>

</html>