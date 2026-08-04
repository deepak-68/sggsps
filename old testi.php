
        <!-- testimonial area start -->
        <section class="testimonial-area pb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-area mb-55 section-area-top text-center">
                            <h2 class="section-title mb-20">What Parents Say?</h2>
                            <p class="section-text">
                                Through a combination of lectures, readings, discussions, students will gain a solid foundation in educational psychology.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrap">
                <div class="testimonial-active swiper">
                    <div class="swiper-wrapper pb-80">
                        <?php
                        $query = "SELECT * FROM testimonial Where Status = 1";
                        $result = $db->query($query);
                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                $message = $row['message'];
                                $name = $row['name'];
                                $designation = $row['designation'];
                                $image = $row['image'];


                        ?>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">

                                        <div class="testimonial-top">

                                            <div class="testimonial-admin">
                                                <div class="testimonial-admin-img">
                                                    <img src="admin/testimonial/<?php echo $image; ?>" alt="testimonials">
                                                </div>
                                                <div class="testimonial-admin-info">
                                                    <h5><?php echo $name; ?><h5>
                                                            <span><?php echo $designation; ?></span>
                                                </div>
                                            </div>
                                            <div class="testimonial-rating">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p align="justify">
                                                <?php echo $message; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            }
                        } else {
                            echo "No testimonials found";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="testimonial-scrollbar-wrap">
                    <div class="swiper-scrollbar testimonial-scrollbar"></div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->