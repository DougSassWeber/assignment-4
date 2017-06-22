<?php 

include "dbConnect.php";

// For DVDs
// Insert into table sql statement
function fInsertToDatabase($asin, $title, $price) {
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
  // TODO: Fill in the rest of the function
  
}
// Delete from table sql statement
function fDeleteFromDatabase($deleteID) {
  $sql = "DELETE FROM tblCustomers WHERE CustID=$deleteID";
  // TODO: Fill in the rest of the function
}
//Prepare database
//bind paratmeters
//execute statement

// Display table sql statement
function fListFromDatabase() {

  $db = fConnectToDatabase();
 
  $sql = 'SELECT asin, title, price FROM dvdtitles ORDER BY title';
  
  $stmt =  $db->prepare($sql);
 
  $stmt->execute();

  $stmt->bind_result($dvds);

  $stmt->fetch();

  printf($stmt);

  $stmt->close();

//fetch
}

// For Actors
// Insert into table sql statement

// Delete from table sql statement

// Display table sql statement


