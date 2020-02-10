<!DOCTYPE html>
<html>
<head>
    <title>jQuery Assessment 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
    <form method="post" action="filter.php">
        <div>
            <input type="range" min="1" max="100" value="18" id="minRange" name="min" onchange="printmin()">
            <input type="range" min="1" max="100" value="40" id="maxRange" name="max" onchange="printmax()">

            <div>
                <h3>Minimum Age is</h3>
                <p id="min_x"></p>
                <h3 >and Maximum Age is </h3>
                <p id="max_x"></p>
            </div>
            <div ></div>
                  
            <input type="submit" name="submit_range" value="Filter Product" class="btn-submit">
        </div>
    </form>
</div>
</body>
<script>
    function printmin(){
        var min = document.getElementById('minRange').value
        document.getElementById('min_x').innerHTML = min;
        //document.getElementById("time").innerHTML
        console.log(min);

    }
    function printmax(){
        var max = document.getElementById('maxRange').value
        document.getElementById('max_x').innerHTML = max
        console.log(max)
    }
</script>
    
</html>
