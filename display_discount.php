<html>
<head>
    <title>Product Discount Calculator</title>
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
</head>
<body>
<?php

$nameProduct = $_POST["description"];
$priceProduct = $_POST["price"];
$discountPercent = $_POST["discount_percent"];



function discountAmount($a,$b) {
    $c = $a * $b *0.01;
    return $c;
}

function discountPrice($a,$b) {
    $c = $a - $b;
    return $c;
}


?>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php echo $nameProduct ?></span><br/>
    <label>Price: </label>
    <span><?php echo $priceProduct ?></span> $<br/>
    <label>Discount Percent: </label>
    <span><?php echo $discountPercent ?> %</span><br/>
    <label>Discount Amount: </label>
    <span><?php echo discountAmount($priceProduct,$discountPercent)?> $</span><br/>
    <label>Discount Price: </label>
    <span><?php echo discountPrice($priceProduct,discountAmount($priceProduct,$discountPercent)) ?> $</span><br/>
</div>
</body>
</html>