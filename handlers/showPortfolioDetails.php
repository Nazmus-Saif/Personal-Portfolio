<?php
    $query = "SELECT item_name, detailed_text, upload_date FROM portfolio ORDER BY upload_date DESC";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $itemName = $row['item_name'];
            $detailedText = $row['detailed_text'];
            $uploadDate = $row['upload_date'];
            $formattedDate = date("j M, Y", strtotime($uploadDate));
            echo '';
        }
        mysqli_free_result($result);
        } else {
            echo '<div class="no-text-found">No Text Found</div>';
        }
        mysqli_close($conn);
?>