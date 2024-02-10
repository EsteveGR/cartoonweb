<?php
function checkItemExists($tableName, $columnName, $value) {
    
    require 'connexio.php';
    
    // Create a new connection
    $stmt = $conn->prepare("SELECT COUNT(*) FROM $tableName WHERE $columnName = ?");

    // Bind the parameter
    $stmt->bind_param("s", $value);

    // Execute the query
    $stmt->execute();

    // Fetch the result
    $stmt->bind_result($count);
    $stmt->fetch();

    // Close the statement and the connection
    $stmt->close();
    $conn->close();

    // Return true if the item exists, false otherwise
    return $count > 0;
}

?>

