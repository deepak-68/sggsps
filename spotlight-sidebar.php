<div class="blog_details-widget">
                                    <h4 class="blog_details-widget-title">Recent Spotlights</h4>
                                    <div class="blog_details-widget-post">
                                    <?php 
                           $sql = "SELECT * FROM spotlight WHERE status = 1 ORDER BY spotlight_date LIMIT 2";
                           $result = $db->query($sql);
                           
                           if ($result->num_rows > 0) {
                               while ($row = $result->fetch_assoc()) {
                                   $spotlight_id = $row['spotlight_id'];
                           
                                   // Encoding the ID
                                   $encoded_id = base64_encode($spotlight_id);
                           
                                   // Extracting blog post details
                                   $title = $row["title"];
                                   $date = date("d M, Y", strtotime($row["spotlight_date"]));
                                 
                                   $description = $row["description"];
                           
                                   // Displaying the content
                                   ?>

                                      
                                        <div class="blog_details-post-info">
                                            <span><i class="fa-thin fa-clock"></i><?php echo $date;?></span>
                                            <h6><a href="news-achievements-details.php?id=<?php echo $encoded_id?>"><?php echo $title;?></a></h6>
                                        </div>
                                    </div>
                                    
                                    
                                    <?php
                                }}else{
                                    echo "no achievements";
                                }
                                    ?>
                                </div>