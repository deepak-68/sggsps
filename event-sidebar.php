<div class="blog_details-widget">

    <h4 class="blog_details-widget-title">Recent Events</h4>
    <?php
    $sql = "SELECT * FROM events WHERE status = 1 ORDER BY event_date LIMIT 4";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $news_id = $row['event_id'];

            // Encoding the ID
            $encoded_id = base64_encode($news_id);

            // Extracting blog post details
            $title = $row["title"];
            $date = date("d M, Y", strtotime($row["event_date"]));
            $image = $row["image"];
            $description = $row["description"];

            // Displaying the content
    ?>
            <div class="blog_details-widget-post">



                <div class="blog_details-post-img">
                    <a href="event-details.php"><img src="admin/services/<?php echo $image; ?>" alt="achievements"></a>
                </div>
                <div class="blog_details-post-info">
                    <span><i class="fa-regular fa-calendar-days"></i> <?php echo $date; ?></span>
                    <h6 align="justify"><a href="event-details.php?id=<?php echo $encoded_id ?>"><?php echo $title; ?></a></h6>
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