<?php
/**
 * Template Name: Home
 */

get_header(); ?>
<div id="home" class="main_content">
    <div class="triblock">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php if( get_field('slide') ): ?>
                            <?php while( has_sub_field('slide') ): ?>
                                <!-- Wrapper for slides -->
                                <div class="item active">
                                    <img src="<?php the_sub_field('image'); ?>" alt="" />
                                    <div class="carousel-caption">
                                        <?php the_sub_field('caption'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#homeCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#homeCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="visit block">
                            <h2>Saturdays <span>5:00PM</span></h2>
                            <span class="small_text">40a Flora Street, Kirrawee</span>
                            <a class="btn yellow" href="#">I want to visit</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <div class="jesus_changes block">
                            <span class="small_text">Jesus changes</span>
                            <h2>Everything</h2>
                            <div class="btn yellowMedium">Find out more</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section differently">
        <div class="text-center">
            <p class="small_text">You might find that we do things</p>
            <p class="large_text">A Little Differently</p>
            <p class="small_text">At Soul Revival Church</p>
        </div>
    </div>
    <div class="section different_features">
        <div class="row">
            <div class="col-sm-4">
                <div class="factory block">
                    <p class="option">Firstly</p>
                    <p class="small_text">We meet in a</p>
                    <p class="large_text">Factory</p>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/factory-icon.png" alt="Our Factory">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="saturday block">
                    <p class="option">Secondly</p>
                    <p class="small_text">On a Saturday</p>
                    <p class="large_text">Night</p>
                    <i class="fa fa-moon-o"></i>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="dinner block">
                    <p class="option">Thirdly</p>
                    <p class="small_text">We share dinner</p>
                    <p class="large_text">Every Week</p>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/factory-icon.png" alt="Our Factory">
                </div>
            </div>
        </div>
    </div>
    <div class="section night_format">
        <div class="container">
            <p class="small_text">Each night looks a little bit like this</p>
            <div class="clock">
                <span><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <p class="time">5:00<span>PM</span>-5:30<span>PM</span></p>
                    <div class="large_text">Coffee</div>
                </div>
                <div class="col-sm-2">
                    <p class="time">5:00<span>PM</span>-6:30<span>PM</span></p>
                    <div class="large_text">Kids</div>
                </div>
                <div class="col-sm-2">
                    <p class="time">5:30<span>PM</span>-6:30<span>PM</span></p>
                    <div class="large_text">Service</div>
                </div>
                <div class="col-sm-2">
                    <p class="time">6:30<span>PM</span>-7:30<span>PM</span></p>
                    <div class="large_text">Coffee</div>
                </div>
                <div class="col-sm-2">
                    <p class="time">7:30<span>PM</span>-Late</p>
                    <div class="large_text">Party</div>
                </div>
            </div>
            <a class="btn red" href="/im-new">Find Out More</a>
        </div>
    </div>
    <div class="section instagram_feed">
        <div class="container">
            <div class="text-center">
                <p class="small_text">So what's been</p>
                <p class="large_bree">happening</p>
                <p class="small_text">in our community?</p>
            </div>

        </div>
    </div>

</div>


<?php get_footer(); ?>