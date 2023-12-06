<?php
/*
Your Name: Priyanshi Deliwala
GWID: G23959332
Date: <?= date("l, F jS") ?>
FileName: grocerylist.php
*/
$selectedSupermarket = $_POST['supermarket'];
$selectedItems = $_POST['items'];

// Grocery items for different supermarkets
$groceryLists = [
    "Whole Foods" => ["Spinach", "Bread", "Butter", "Oranges", "Cucumbers", "Bananas", "Green Peppers", "Apples"],
    "Giant" => ["Bread", "Oranges", "Bananas", "Green Peppers"],
    "Wegmans" => ["Spinach", "Butter", "Cucumbers", "Apples"],
];
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Grocery List</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<?php include 'header.inc.php'; ?>

<main>
    <section class="results">

    <table id="customers">
          <caption class="results__caption">My grocery list for <?= $selectedSupermarket ?></caption>
      <thead>
                    <tr>
                        <th>Grocery Items</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add your grocery items and quantities as table rows here -->
                    <?php
                // Display selected grocery items in a table
                foreach ($selectedItems as $item) {
                    echo "<tr>";
                    echo "<td>$item</td>";
                    echo "<td></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>

    </table>

    </section>

</main>
<footer>
    <p>Created By Priyanshi Deliwala</p>
    <p>GWID: G23959332</p>
</footer>
</body>
</html>
