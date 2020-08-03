
<h3>GET</h3>
<p>Input a number to check prime</p>
<form method="get">
    <input type="text" name="number">
    
    <?php
    if(is_numeric($_GET["number"])){
        $number = $_GET["number"];
        $isPrime = true;
        
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i==0){
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo "This number is a prime";
        } else {
            echo "This number is not a prime";
        }
        echo "<br>";
    } else {
        echo "Number only!<br>";
    }
?>
    <input type="submit" value="Check">
</form>

