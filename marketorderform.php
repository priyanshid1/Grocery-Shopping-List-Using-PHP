<?php
/*
Your Name: Priyanshi Deliwala
GWID: G23959332
Date: Friday, October 20th 
FileName: marketform_deliwala.php
*/

// Define arrays for supermarkets and grocery items
$supermarkets = ["Whole Foods", "Giant", "Wegmans"];
$groceryItems = ["Spinach", "Bread", "Butter", "Oranges", "Cucumbers", "Bananas", "Green Peppers", "Apples"];
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Market Order</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php include 'header.inc.php'; ?>

<main>
<form class="form" id="mainForm" action="grocerylist.php" method="post">
        <fieldset class="form__panel">
            <legend class="form__heading">Create My Shopping List</legend>
            <p class="form__row">
                <label>My Supermarket</label><br/>
                <select name="supermarket">
                    <?php
                    // Loop to create a pull-down menu of supermarkets
                    foreach ($supermarkets as $market) {
                        echo "<option value='$market'>$market</option>";
                    }
                    ?>
                </select>
            </p>

            <p class="form__row">
                <label>Items</label><br/>
                <?php
                // Loop to create checkboxes for grocery items
                foreach ($groceryItems as $item) {
                    echo "<input type='checkbox' name='items[]' value='$item'>$item<br>";
                }
                ?>
            </p>

            <div class="form__box">
                <input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">
            </div>
        </fieldset>
    </form>
</main>
<footer>
    <p>Created By Priyanshi Deliwala</p>
    <p>GWID: G23959332</p>
</footer>
</body>
</html>
