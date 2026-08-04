<div class="blog_details-widget">
    <h4 class="blog_details-widget-title">Recent Achievements</h4>
    <?php
    $sql = "SELECT * FROM notice_board WHERE status = 1 ORDER BY notice_date LIMIT 3";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $notice_id = $row['notice_id'];

            // Encoding the ID
            $encoded_id = base64_encode($notice_id);

            // Extracting blog post details
            $title = $row["title"];
            $date = date("d M, Y", strtotime($row["notice_date"]));
            $image = $row["image"];
            $description = $row["description"];

            // Displaying the content
    ?>
            <div class="blog_details-widget-post">


                <div class="blog_details-post-img">
                    <a href="#"><img src="admin/services/<?php echo $image; ?>" alt="notice-board"></a>
                </div>
                <div class="blog_details-post-info">
                    <span><i class="fa-regular fa-calendar-days"></i><?php echo $date; ?></span>
                    <h6 align="justify"><a href="notice-board-details.php?id=<?php echo $encoded_id ?>"><?php echo $title; ?></a></h6>
                </div>
            </div>
            <hr>


    <?php
        }
    } else {
        echo "no achievements";
    }
    ?>
</div>