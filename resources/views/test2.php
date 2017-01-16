
/**
 * Created by IntelliJ IDEA.
 * User: samyy
 * Date: 29-Dec-16
 * Time: 1:42 AM
 */

<!DOCTYPE html>
<head>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <script src ="/public/js/jquery.js"></script>
   <!-- <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script> -->

    <script>
$(document).ready(function () {
    $("button").click(function () {
        $("h1").hide();

    })

    })

    </script>
    <style>

button {
    color: red;
}
    </style>

</head>



<?php
$people = [
    'name' => 'Shane',
    'age' => 12,
    'height' => 13


];

?>

<h1>This is my test page</h1>
<h2>his is a heading</h2>




<button>Click me</button>
<ul>
    <?php foreach ($people as $person){

        echo "<li>$person</li>";

    }
    ?>

</ul>


</html>