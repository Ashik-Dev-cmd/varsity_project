<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #fff;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border: 2px solid #000;
    border-radius: 10px;
}

.title {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.bill-details {
    margin-bottom: 20px;
}

.bill-details h3 {
    margin: 0;
}

.bill-details p {
    margin: 5px 0;
}

.grand-total {
    font-weight: bold;
}

.back-btn {
    display: block;
    width: 50%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    text-align: center;
    border-radius: 5px;
    margin-top: 20px;
    margin-left: 25%;
}

.back-btn:hover {
    background-color: #45a049;
}
#billcon
{
    text-align: center;
    box-shadow: 2px 2px 5px #1679AB;
    margin-left: 100px;
    margin-right: 100px;
}
h1
{
    color: #45a049;
}
.total
{
    color: #1679AB;
}



    </style>

</head>
<body>
    <div id="billcon">
<h1>YOUR BILL SUMMARY</h1>
<?php
$productListSummary = "";
if(isset($_POST['send']))
{
    $grandTotal = 0;
    $cnum = $_POST['cnum'];
    if(!empty($_POST['riceam']))
    {
        $p_rice = $_POST['riceam']; 
        $total_price = $p_rice * 75; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "RICE x $p_rice = $total_price tk\n"; 
        echo "<li>RICE = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['onionam']))
    {
        $p_rice = $_POST['onionam']; 
        $total_price = $p_rice * 60; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "ONION x $p_rice = $total_price tk\n"; 
        echo "<li>ONION = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['potatoam']))
    {
        $p_rice = $_POST['potatoam']; 
        $total_price = $p_rice * 50; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "POTATO x $p_rice = $total_price tk\n"; 
        echo "<li>POTATO = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['gingeram']))
    {
        $p_rice = $_POST['gingeram']; 
        $total_price = $p_rice * 250; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "GINGER x $p_rice = $total_price tk\n"; 
        echo "<li>GINGER = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['tomatoam']))
    {
        $p_rice = $_POST['tomatoam']; 
        $total_price = $p_rice * 60; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "TOMATO x $p_rice = $total_price tk\n"; 
        echo "<li>TOMATO = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['garlicam']))
    {
        $p_rice = $_POST['garlicam']; 
        $total_price = $p_rice * 200; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "GARLIC x $p_rice = $total_price tk\n"; 
        echo "<li>GARLIC = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['masalaam']))
    {
        $p_rice = $_POST['masalaam']; 
        $total_price = $p_rice * 500; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "MASALA x $p_rice = $total_price tk\n"; 
        echo "<li>MIX MASALA = ".$total_price."</li><br>"; 
    }
    if(!empty($_POST['breadam']))
    {
        $p_rice = $_POST['breadam']; 
        $total_price = $p_rice * 60; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "BREAD x $p_rice = $total_price tk\n"; 
        echo "<li>BREAD = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['cucumberam']))
    {
        $p_rice = $_POST['cucumberam']; 
        $total_price = $p_rice * 40; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "CUCUMBER x $p_rice = $total_price tk\n"; 
        echo "<li>CUCUMBER = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['eggam']))
    {
        $p_rice = $_POST['eggam']; 
        $total_price = $p_rice * 10; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "EGG x $p_rice = $total_price tk\n"; 
        echo "<li>EGG = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['flouram']))
    {
        $p_rice = $_POST['flouram']; 
        $total_price = $p_rice * 120; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "FLOUR x $p_rice = $total_price tk\n"; 
        echo "<li>FLOUR = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['cabbageam']))
    {
        $p_rice = $_POST['cabbageam']; 
        $total_price = $p_rice * 65; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "CABBAGE x $p_rice = $total_price tk\n"; 
        echo "<li>CABBAGE = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['chilliam']))
    {
        $p_rice = $_POST['chilliam']; 
        $total_price = $p_rice * 200; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "CHILLI x $p_rice = $total_price tk\n"; 
        echo "<li>CHILLI = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['saltam']))
    {
        $p_rice = $_POST['saltam']; 
        $total_price = $p_rice * 80; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "SALT x $p_rice = $total_price tk\n"; 
        echo "<li>SALT = ".$total_price."tk</li><br>"; 
    }
    if(!empty($_POST['oilam']))
    {
        $p_rice = $_POST['oilam']; 
        $total_price = $p_rice * 130; 
        $grandTotal = $grandTotal+$total_price;
        $productListSummary .= "OIL x $p_rice = $total_price tk\n"; 
        echo "<li>OIL = ".$total_price."tk</li><br>"; 
    }
    echo "<h1 class = 'total'>Your Grand Total Bill is :  ". $grandTotal."/=</h1>";
    if($_POST['area']=='mirpur')
    {
        $grandTotal = $grandTotal - 100;
        echo "<h1 class = 'total'>Your Discounted Grand Total Bill is :  ". $grandTotal."/=</h1>";
    }
}
$whatsappMessage = urlencode("Here is your order summary:\n$productListSummary\nGrand Total: $grandTotal /=");


?>
 </div>
 <br>
        <a class="back-btn" href="home.php">Back to Order Page</a>
    </div>
    <a class="whatsapp-btn" href="https://wa.me/<?php echo $cnum;?>/?text=<?php echo $whatsappMessage; ?>">Send Product List to WhatsApp</a>
    <br>
    <form action="" method="POST">
    <input type="submit" name="download" id="download" value="Download Bill Summery">
    </form>
    <?php
    
    if(isset($_POST['download']))
    {

 
    $filename = "bill_summary_". ".txt";
    file_put_contents($filename, $whatsappMessage);

    readfile($filename);

    
    unlink($filename);

    
}
    ?>
</body>
</html>