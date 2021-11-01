<?php

  // -----------------------------------------------------------------
  // Set connection parameters and create connection
  // -----------------------------------------------------------------
  $host = "127.0.0.1";
  $user = "root";
  $password = "mysql";
  $database = "dbInventory";

  $cxn = mysqli_connect($host, $user, $password, $database);
  
  switch ($_GET["request"])
  {
    
    // ---------------------------------------------------------------
    // Update Inventory
    // ---------------------------------------------------------------
    case "update":
                  
      // Create and submit select query
      $sql = "SELECT * FROM tbInventory WHERE productID=" . $_GET["ID"];
      $result = mysqli_query($cxn, $sql);
      
      if($result == false)
        echo "Update query 1 operation FAILED.";
      

		else if (mysqli_num_rows($result) == 0)
			echo "Update operation FAILED. Product ID '" . $_GET["ID"] . "' not found.";
		
		else
          {

            // Create and submit update query
            $sql = "UPDATE tbInventory SET Quantity='" . $_GET["Quan"] .  "' WHERE productID=" . $_GET["ID"];
            $result = mysqli_query($cxn, $sql); 
            
			if($result == false)
				echo "Update query operation FAILED.";
			else
				echo "Update operation Suucessed. Product ID '" . $_GET["ID"];
          }
      
      break;
    
    
    // ---------------------------------------------------------------
    // List Products
    // -Possible errors: none.
    // ---------------------------------------------------------------
    case "list":

      // Create and submit select query
      $sql = "SELECT * FROM tbInventory ORDER BY productID";
      $result = mysqli_query($cxn, $sql);
      $data = array();
	  
      // Test if query failed
      if($result == false)
        echo "List operation FAILED.";
      else
      {
        
        // Loop to retrieve data
        
        while($row = mysqli_fetch_row($result))
          $data[] = $row;
		echo json_encode( $data );

      }
      break;
    
    

  }
  
?>

