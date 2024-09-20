<?php
    $query = "SELECT commenter, comment_text, comment_date FROM comments ORDER BY comment_date DESC";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $commenter = $row['commenter'];
            $commentText = $row['comment_text'];
            $commentDate = $row['comment_date'];
            $formattedDate = date("j M, Y", strtotime($commentDate));
            echo '<li class="comments-item">
                        <div class="content-card" item-comments-div>
                        <figure class="comments-avatar-box">
                            <img src="./images/commenter-avatar.png" alt="commenter-avatar" width="60" item-comments-avatar>
                        </figure>
                        <h4 class="h4 comments-item-title" item-commenter-name>' . htmlspecialchars($commenter) . '</h4>
                        <time class="comments-time" item-comments-time>' . htmlspecialchars($formattedDate) . '</time>
                        <div class="comments-text" item-comments-text>
                            <p>' . htmlspecialchars($commentText) . '</p>
                        </div>
                        </div>
                    </li>';
        }
        mysqli_free_result($result);
        } else {
            echo '<div class="no-comment-found">No Comment Found</div>';
        }
        mysqli_close($conn);
?>