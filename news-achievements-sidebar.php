<div class="blog_details-widget">
    <h4 class="blog_details-widget-title">Recent Achievements</h4>
    <?php 
        $sql = "SELECT * FROM news WHERE status = 1 ORDER BY news_date LIMIT 4";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $news_id = $row['news_id'];

            // Encoding the ID
            $encoded_id = base64_encode($news_id);

            // Extracting blog post details
            $title = $row["title"];
            $date = date("d M, Y", strtotime($row["news_date"]));
            $image = $row["image"];
            $description = $row["description"];

            // Displaying the content
            ?>
            <div class="blog_details-widget-post">
            

                <div class="blog_details-post-img">
                    <a href="#"><img src="admin/services/<?php echo $image;?>" alt="achievements"></a>
                </div>
                <div class="blog_details-post-info">
                    <span><i class="fa-regular fa-calendar-days"></i><?php echo $date;?></span>
                    <h6 align="justify"><a href="news-achivement-details.php?id=<?php echo $encoded_id?>"><?php echo $title;?></a></h6>
                </div>
            </div>
            
            
            <?php
        }}else{
            echo "no achievements";
        }
    ?>
</div>