<?php get_header(); ?>
      <body>
        <div class="container">

            <div class="tm-sidebar">
                <img src="<?php bloginfo('template_directory'); ?>/img/menu-top.jpg" alt="Menu top image" class="img-fluid tm-sidebar-image">
                <nav class="tm-main-nav">
                    <ul>
                        <li class="tm-nav-item"><a href="#home" class="tm-nav-item-link">Home</a></li>
                        <li class="tm-nav-item"><a href="#about" class="tm-nav-item-link">About</a></li>
                        <li class="tm-nav-item"><a href="#ideas" class="tm-nav-item-link">Ideas</a></li>
                        <li class="tm-nav-item"><a href="#contact" class="tm-nav-item-link">Contact</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="tm-main-content">
                
                <section id="home" class="tm-content-box tm-banner margin-b-10">
                    <div class="tm-banner-inner">
                        <h1 class="tm-banner-title">Elevate</h1>
                        <p class="tm-banner-text">free bootstrap 4.0 layout <br>by templatemo</p>    
                    </div>                    
                </section>

                <section>
                    <div class="tm-content-box flex-2-col">
                        
                        <div class="pad flex-item tm-team-description-container">
                            <h2 class="tm-section-title">Our Team</h2>
                            <p class="tm-section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nisi pharetra nibh varius pharetra ac sagittis nisi. Etiam pharetra vestibulum hendrerit.</p>
                            <p class="tm-section-description">Donec ex libero, fringilla vitae purus sit amet, rhoncus pharetra lorem. Pellentesque id sem id lacus ultricies vehicula. Aliquam rutrum mi non.</p>    
                        </div>
                        <div class="flex-item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/about.jpg" alt="">    
                        </div>                       
                        

                    </div>
                    <div id="about" class="tm-content-box">
                        
                        <ul class="boxes gallery-container">
                            <li class="box box-bg">
                                <h2 class="tm-section-title tm-section-title-box tm-box-bg-title">Creative</h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/white-bg.jpg" alt="Image" class="img-fluid">
                            </li>
                            <li class="box">
                                <a href="<?php bloginfo('template_directory'); ?>/img/idea-large-01.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/idea-01.jpg" alt="Image" class="img-fluid"></a>
                            </li>
                            <li class="box box-bg">
                                <h2 class="tm-section-title tm-section-title-box tm-box-bg-title">Develop</h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/white-bg.jpg" alt="Image" class="img-fluid">
                            </li>
                            <li class="box">
                                <a href="<?php bloginfo('template_directory'); ?>/img/idea-large-02.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/idea-02.jpg" alt="Image" class="img-fluid"></a>
                            </li>
                            <li class="box box-bg">
                                <h2 class="tm-section-title tm-section-title-box tm-box-bg-title">Design</h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/white-bg.jpg" alt="Image" class="img-fluid">
                            </li>
                            <li class="box">
                                <a href="<?php bloginfo('template_directory'); ?>/img/idea-large-03.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/idea-03.jpg" alt="Image" class="img-fluid"></a>
                            </li>
                            <li class="box box-bg">
                                <h2 class="tm-section-title tm-section-title-box tm-box-bg-title">Support</h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/white-bg.jpg" alt="Image" class="img-fluid">
                            </li>
                            <li class="box">
                                <a href="<?php bloginfo('template_directory'); ?>/img/idea-large-04.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/idea-04.jpg" alt="Image" class="img-fluid"></a>
                            </li>
                            <li class="box box-bg">
                                <h2 class="tm-section-title tm-section-title-box tm-box-bg-title">Think</h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/white-bg.jpg" alt="Image" class="img-fluid">
                            </li>
                        </ul>

                    </div>
                    
                </section>

                <!-- slider -->
                <section id="ideas">
                    <div id="tmCarousel" class="carousel slide tm-content-box" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#tmCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#tmCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#tmCarousel" data-slide-to="2" class=""></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                        
                            <div class="carousel-item active">
                                <div class="carousel-content">
                                    <div class="flex-item">
                                        <h2 class="tm-section-title">Our Ideas</h2>
                                        <p class="tm-section-description carousel-description">Suspendisse fermentum auctor turpis quis volutpat. Ut sed nibh non purus porta lacinia. Donec et euismod elit. Aenean vitae quam leo. Pellentesque interdum metus sed massa rutrum.</p>
                                    </div>
                                </div>                               
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-content">
                                    <div class="flex-item">
                                        <h2 class="tm-section-title">Our Clients</h2>
                                        <p class="tm-section-description carousel-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel nisi pharetra nibh varius pharetra ac sagittis nisi. Etiam pharetra vestibulum hendrerit. Pellentesque interdum metus sed massa rutrum.</p>
                                    </div>
                                </div>                                
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-content">
                                    <div class="flex-item">
                                        <h2 class="tm-section-title">Our Projects</h2>
                                        <p class="tm-section-description carousel-description">Donec ex libero, fringilla vitae purus sit amet, rhoncus pharetra lorem. Pellentesque id sem id lacus ultricies vehicula. Aliquam rutrum mi non. Pellentesque interdum metus sed massa rutrum.</p>
                                    </div>
                                </div>                                
                            </div>

                        </div>
                        
                    </div>                    
                </section>

                <section class="tm-content-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/contact.jpg" alt="Contact image" class="img-fluid">

                    <div id="contact" class="pad">
                        <h2 class="tm-section-title">Contact Us</h2>
                        <form action="#contact" method="get" class="contact-form">

                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group-2-col-left">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group-2-col-right">
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>

                        </form>      
                    </div>
                    
                </section>  

               <?php get_footer(); ?>