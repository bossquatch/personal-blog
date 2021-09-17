@extends('layouts.default')
@section('content')

<div id="main" class="site-main">

    <!-- main content -->
    <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">
            <div id="content" class="page-content site-content single-post" role="main">
                <!-- Home Page Top Part -->
                <div class="row">
                    <div class=" col-xs-12 col-sm-12">
                        <div class="home-content">
                            <div class="row flex-v-align">

                                <div class="col-sm-12 col-md-5 col-lg-5">
                                    <div class="home-photo">
                                        <div class="hp-inner" style="background-image: url(images/head_doug.png);">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-7 col-lg-7">
                                    <div class="home-text hp-left">
                                        <div class="owl-carousel text-rotation">
                                            <div class="item">
                                                <h4>Technology Executive</h4>
                                            </div>

                                            <div class="item">
                                                <h4>Resource Manager</h4>
                                            </div>

                                            <div class="item">
                                                <h4>Full-Stack Developer</h4>
                                            </div>
                                        </div>

                                        <h1>Douglas Cockerham</h1>
                                        <p>Experienced technologist and manager capable of developing and implementing a
                                            strategic business vision, leading innovation and promoting research and development
                                            within the organization. Exceptional program and team manager with proven skills in
                                            commercializing technologies. Seeking technical management and leadership opportunities.</p>

                                        <div class="home-buttons">
                                            <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
                                            <a href="/contact" target="_self" class="btn btn-secondary">Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Home Page Top Part -->

                <!-- Services -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="p-50"></div>

                        <div class="block-title">
                            <h2>What I Do</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="info-list-w-icon">
                            <div class="info-block-w-icon">
                                <div class="ci-icon">
                                    <i class="fas fa-user-edit"></i>
                                </div>

                                <div class="ci-text">
                                    <h4>Resource Manager</h4>
                                    <p>Over 20 years experience building, managing, and motivating effective, highly capable design and development teams. I have extensive experience managing geographically and culturally diverse teams both in-person and remotely.</p>
                                </div>
                            </div>

                            <div class="info-block-w-icon">
                                <div class="ci-icon">
                                    <i class="fas fa-sitemap"></i>
                                </div>

                                <div class="ci-text">
                                    <h4>Application Design</h4>
                                    <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="info-list-w-icon">

                            <div class="info-block-w-icon">
                                <div class="ci-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>

                                <div class="ci-text">
                                    <h4>Technology Executive</h4>
                                    <p>I am an experienced technologist very familiar with strategic planning, operating budgets, proposed IT capital improvements and emerging trends in management information systems. My work typically involves analysis of workflow and the development of solutions that increase efficiency and deliver tangible value back to the business.</p>
                                </div>
                            </div>

                            <div class="info-block-w-icon">
                                <div class="ci-icon">
                                    <i class="fas fa-layer-group"></i>
                                </div>

                                <div class="ci-text">
                                    <h4>Full-Stack Development</h4>
                                    <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Services -->

                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="p-20"></div>

                        <!-- Testimonials -->
                        <div class="block-title">
                            <h2>Testimonials</h2>
                        </div>

                        <div id="testimonials_1" class="testimonials owl-carousel" data-mobile-items="1" data-tablet-items="2" data-items="2">
                            <!-- Testimonial 1 -->
                            <div class="testimonial-item">
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <!-- Picture -->
                                    <div class="testimonial-picture">
                                        <img src="images/testimonials/dennis-f.png" alt="Dennis Fashimpaur"/>
                                    </div>
                                    <!-- /Picture -->

                                    <!-- Testimonial Text -->
                                    <div class="testimonial-text">

                                        <p>
                                            Doug has a keen sensibility about him and knows how to maximize the abilities of his team.  He leads with solid direction and knows how to encourage those that work for him to be unafraid to make mistakes and how to be independent enough in what they do so that each minute is not spent asking 'Doug, is this ok?'.  He sets expectations and will praise you for achieving them or take time to discuss the shortfall if you do not.  He is a great mentor and sees everyone for what they have within them to become.
                                        </p>

                                    </div>
                                    <!-- /Testimonial Text -->

                                    <!-- Testimonial author information -->
                                    <div class="testimonial-author-info">
                                        <h5 class="testimonial-author">Dennis Fashimpaur</h5>
                                        <p class="testimonial-firm">HSBC</p>
                                    </div>
                                    <!-- /Testimonial author information -->

                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="testimonial-icon-big">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                                <!-- /Testimonial Content -->
                            </div>
                            <!-- End of Testimonial 1 -->

                            <!-- Testimonial 2 -->
                            <div class="testimonial-item">
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <!-- Picture -->
                                    <div class="testimonial-picture">
                                        <img src="images/testimonials/todd-e.png" alt="Todd Ensz"/>
                                    </div>
                                    <!-- /Picture -->

                                    <!-- Testimonial Text -->
                                    <div class="testimonial-text">
                                        <p>Doug Cockerham was a development manager in my organization for several years. Simply put, he's an excellent manager. He finds creative solutions to technical problems in addition to being an excellent people leader. He's always cool under pressure and never loses site of strategic objectives. I'd have Doug in my organization again any time.</p>
                                    </div>
                                    <!-- /Testimonial Text -->

                                    <!-- Testimonial author information -->
                                    <div class="testimonial-author-info">
                                        <h5 class="testimonial-author">Todd Ensz</h5>
                                        <p class="testimonial-firm">Household Credit Services</p>
                                    </div>
                                    <!-- /Testimonial author information -->

                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="testimonial-icon-big">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                                <!-- /Testimonial Content -->
                            </div>
                            <!-- End of Testimonial 2 -->

                            <!-- End of Testimonial 3 -->
                            <div class="testimonial-item">

                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <!-- Picture -->
                                    <div class="testimonial-picture">
                                        <img src="images/testimonials/kelly-c.png" alt="Kelly Cockerham"/>
                                    </div>
                                    <!-- /Picture -->

                                    <!-- Testimonial Text -->
                                    <div class="testimonial-text">
                                        <p>Doug is very detail oriented and ensures that the end product exceeds expectations. His knowledge has been a life saver in more than one instance. Doug's level of creativity leads to a product never imagined. Driving traffic to my site is crucial to my business and I greatly appreciate Doug's efforts to make sure this happens. A true asset!!!</p>
                                    </div>
                                    <!-- /Testimonial Text -->

                                    <!-- Testimonial author information -->
                                    <div class="testimonial-author-info">
                                        <h5 class="testimonial-author">Kelly Cockerham</h5>
                                        <p class="testimonial-firm">Dream Realty Referral Group</p>
                                    </div>
                                    <!-- /Testimonial author information -->

                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="testimonial-icon-big">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                                <!-- /Testimonial Content -->

                            </div>
                            <!-- End of Testimonial 3 -->
                        </div>
                        <!-- /Testimonials -->

                    </div>
                </div>

                <!-- Fun Facts -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="block-title">
                            <h2>Fun Facts</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="lm-info-block gray-default">
                            <i class="fas fa-dollar-sign dc-text-bright-blue"></i>
                            <h4>Current Budget Oversight</h4>
                            <span class="lm-info-block-value">$3.5M</span>
                            <span class="lm-info-block-text"></span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <div class="lm-info-block gray-default">
                            <i class="fas fa-users dc-text-bright-blue"></i>
                            <h4>Current Resources Managed</h4>
                            <span class="lm-info-block-value">13</span>
                            <span class="lm-info-block-text"></span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3 ">
                        <div class="lm-info-block gray-default">
                            <i class="fas fa-fighter-jet dc-text-bright-blue"></i>
                            <h4>Miles this week</h4>
                            <span class="lm-info-block-value">21.7</span>
                            <span class="lm-info-block-text"></span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3 ">
                        <div class="lm-info-block gray-default">
                            <i class="fas fa-beer dc-text-bright-blue"></i>
                            <h4>Steps this week</h4>
                            <span class="lm-info-block-value">82,657</span>
                            <span class="lm-info-block-text"></span>
                        </div>
                    </div>
                </div>
                <!-- /Fun Facts -->

                <div class="p-40"></div>

                <!-- Pricing -->

            </div>
        </div>
    </div>
</div>

@stop
