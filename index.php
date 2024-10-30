<?php include 'header.php'; ?>

<link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

<div data-elementor-type="wp-page" data-elementor-id="1655" class="elementor elementor-1655" style="
    margin-top: -25px;
">
<section id="sliderBody" class="position-relative page-header startup-header parallax section-nav-smooth vh-100" 
style="background-image: url('https://www.brandtexbdltd.com/images/banner9.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 0;">
    <h2 class="d-none">hidden</h2>
    <div class="overlay overlay-dark opacity-5 z-index-0"></div>
    <div class="col-12 text-center center-block startup-slider position-relative">
        <div class="startup-img">
            <img src="https://texicon-bd.com/texicon.png" alt="startup" class="img-fluid">
        </div>
        <h2>
            <span class="text2"><br class="br-on-mobile">Corporation Bangladesh</span>
        </h2>
        <h3>
            <div class="text-rainbow-animation">One stop Apparel buying solution</div>         
        </h3>
    </div>
</section>

<script>
    // Array of image URLs for the slider
    const images = [
        "https://www.brandtexbdltd.com/images/banner9.jpg",
        "https://texicon-bd.com/Picture/artem-beliaikin-dwZjyFGWR2g-unsplash.jpg",
        "https://texicon-bd.com/Picture/1520157097443.jpg",
    ];

    let currentIndex = 0;
    const sliderBody = document.getElementById('sliderBody');

    function changeBackgroundImage() {
        // Increment the index and reset if it exceeds the number of images
        currentIndex = (currentIndex + 1) % images.length;
        // Update the background image
        sliderBody.style.backgroundImage = `url('${images[currentIndex]}')`;
    }

    // Change the background every 5 seconds (5000 milliseconds)
    setInterval(changeBackgroundImage, 5000);
</script>

                      <div class="elementor-element elementor-element-09e75f9 elementor-widget elementor-widget-home-page-stats-counter"
                        data-id="09e75f9" data-element_type="widget"
                        data-widget_type="home-page-stats-counter.default">
                        <div class="elementor-widget-container">
                            <!-- Counter -->
                            <!-- <section id="stats">
                                <div id="stats-cover" class="bg-parallux">
                                    <div class="content-box">
                                        <div class="container-fluid">
                                            <div class="row text-center ">
                                                <div class="col-lg-9 col-md-12 col-sm-12 col-12">

                                                    <div class="row counter_content" data-aos="fade-up"
                                                        aos-duration="700">


                                                        <div class="col-md-3 col-sm-6 col-6">
                                                            <div class="stats-item">

                                                                <h2><span class="counter">4</span><span>+</span></h2>
                                                                <p class="">Years In Business</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-6">
                                                            <div class="stats-item">

                                                                <h2><span class="counter">6</span><span>+</span></h2>
                                                                <p class="">Countries Worldwide</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-6">
                                                            <div class="stats-item">

                                                                <h2><span class="counter">190</span><span>+</span></h2>
                                                                <p class="">Staff Worldwide</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-6">
                                                            <div class="stats-item">

                                                                <h2><span class="counter">50</span><span>+</span></h2>
                                                                <p class="">Recommended</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> -->

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bfd29d4 elementor-widget elementor-widget-home-page-about-us"
                        data-id="bfd29d4" data-element_type="widget" data-widget_type="home-page-about-us.default">
                        <div class="elementor-widget-container">

                            <!-- About us part -->
                            <section class="about_section" id="about">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-11 m-auto col-md-12">
                                            <div class="top-about-us">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="top-about-us-content" data-aos="fade-up"
                                                            aos-duration="700">
                                                            <h1 class="common-title">About Us</h1>
                                                            <p class="common_p"> Tex Icon is a Multinational apparel
                                                                buying hub and exporter with a vision to deliver
                                                                world-class service, quality solutions and value
                                                                addition services to end products for the textile
                                                                industries on a global level, beginning from fabrics to
                                                                fashion through market knowledge, experien... </p>
                                                            <a href="https://dongyi.hk/explore-us/"
                                                                class="common_button">Read more</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="top-about-us-image"data-aos="fade-up"
                                                            aos-duration="700">
                                                            <img decoding="async"
                                                                src="https://texicon-bd.com/Picture/junko-nakase-Q-72wa9-7Dg-unsplash.jpg"
                                                                alt="about us" class="img-fluid">
                                                            <div class="top-about-us-image-content">
                                                                <p class="about_top_p">Begin your</p>
                                                                <h1 class="about_middle_h1">Journey</h1>
                                                                <p class="about_bottom_p">In our company</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="bottom-abou-us">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="bottom-about-us-image float-end"
                                                            data-aos="fade-up" aos-duration="700">
                                                            <img decoding="async"
                                                                src="https://texicon-bd.com/Picture/download.jpg"
                                                                alt="about Us" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="about_us_carousel" data-aos="fade-up"
                                                            aos-duration="700">
                                                            <div id="about_us_carousel_id" class="owl-carousel">

                                                                <div class="item">
                                                                    <div class="about_us_quotetion">
                                                                        <i class="fa-solid fa-quote-left"></i>
                                                                        <p>Your trusted sourcing partner of choice.</p>
                                                                        <i class="fa-solid fa-quote-right"></i>
                                                                    </div>

                                                                </div>
                                                                <div class="item">
                                                                    <div class="about_us_quotetion">
                                                                        <i class="fa-solid fa-quote-left"></i>
                                                                        <p>Your trusted sourcing partner of choice.</p>
                                                                        <i class="fa-solid fa-quote-right"></i>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                        </div>
                    </div>
                    <div class="elementor-element elementor-element-af216af elementor-widget elementor-widget-home-page-design-studio"
                        data-id="af216af" data-element_type="widget"
                        data-widget_type="home-page-design-studio.default">
                        <div class="elementor-widget-container">

                            <!-- design_studio -->
                            <section class="design_studio_part" id="design_studio">
                                <div class="container-fluid p_l_0">
                                    <div class="row m_l_0">
                                        <div class="col-lg-12 p_r_0">
                                            <div class="design_studio_left_part">
                                                <div class="row m_l_0">
                                                    <div class="col-lg-6 p_l_0">
                                                        <div class="design_studio_left_part_image" data-aos="fade-up"
                                                            aos-duration="700">
                                                            <div id="design_studio_left_carousel_id"
                                                                class="owl-carousel">
                                                                <div class="item">
                                                                    <img decoding="async"
                                                                        src="https://texicon-bd.com/Picture/cam-morin-knKm7u_7Ihw-unsplash.jpg"
                                                                        alt="Design studio" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row justify-content-start">
                                                            <div class="col-lg-11">
                                                                <div class="design_studio_right_part_content">
                                                                    <h1 class="common-title-right" data-aos="fade-up"
                                                                        aos-duration="700">Design Studio</h1>
                                                                    <div class="design-studio-carosule-main"
                                                                        data-aos="fade-up" aos-duration="700">
                                                                        <div id="design_studio_carousel_id"
                                                                            class="owl-carousel">
                                                                            <div class="item">
                                                                                <div class="about_us_quotetion">
                                                                                    <i
                                                                                        class="fa-solid fa-quote-left"></i>
                                                                                    <p>Professional &amp; Strong
                                                                                        in-house design studio to
                                                                                        deliver design solutions and
                                                                                        creatively translate your vision
                                                                                    </p><i
                                                                                        class="fa-solid fa-quote-right"></i>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3277e76 elementor-widget elementor-widget-home-page-services"
                        data-id="3277e76" data-element_type="widget" data-widget_type="home-page-services.default">
                        <div class="elementor-widget-container">
                            <!-- services part -->
                            <section class="services_section" id="services">
                                <div class="container-fluid p_r_0">
                                    <div class="row m_r_0">
                                        <div class="col-lg-12 p_r_0">
                                            <div class="services_left_part">
                                                <div class="row m_r_0">
                                                    <div class="col-lg-6 ">
                                                        <div class="row justify-content-end">
                                                            <div class="col-lg-11">
                                                                <div class="services_left_part_content">
                                                                    <h1 class="common-title" data-aos="fade-up"
                                                                        aos-duration="700">Services</h1>
                                                                    <p class="title_content" data-aos="fade-up"
                                                                        aos-duration="700">These key factors enable us
                                                                        to work with fashion companies around the world:
                                                                    </p>
                                                                    <ul class="services_left_part_content_list list-group"
                                                                        data-aos="fade-up" aos-duration="700">

                                                                        <li>
                                                                            <p class="list_number">1</p>
                                                                            <p class="list_content common_p">Dynamic
                                                                                business models positioned to operate on
                                                                                short lead times, low margins and
                                                                                flexible volume.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="list_number">2</p>
                                                                            <p class="list_content common_p">Focus on
                                                                                sustainable product offers.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="list_number">3</p>
                                                                            <p class="list_content common_p">Existing
                                                                                sourcing and production presence in key
                                                                                low-cost and duty-free countries of the
                                                                                world.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="list_number">4</p>
                                                                            <p class="list_content common_p">Highly
                                                                                competitive product prices and service
                                                                                fees.</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 p_r_0">
                                                        <div class="services_right_part_image" data-aos="fade-up"
                                                            aos-duration="700">
                                                            <img decoding="async"
                                                                src="https://texicon-bd.com/Picture/slider-1.webp"
                                                                alt="Service Image" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-11 m-auto">
                                            <div class="services_tab_option">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="list-group" id="list-tab" role="tablist"
                                                            data-aos="fade-up" aos-duration="700">
                                                            <a class="list-group-item list-group-item-action active"
                                                                id="list-home-list" data-bs-toggle="list"
                                                                href="#list-home-1" role="tab"
                                                                aria-controls="list-home"> <span><i
                                                                        class="fa-solid fa-arrow-trend-up"></i></span>
                                                                QUALITY</a>
                                                            <a class="list-group-item list-group-item-action "
                                                                id="list-home-list" data-bs-toggle="list"
                                                                href="#list-home-2" role="tab"
                                                                aria-controls="list-home"> <span><i
                                                                        class="fa-solid fa-arrow-trend-up"></i></span>
                                                                INNOVATION</a>
                                                            <a class="list-group-item list-group-item-action "
                                                                id="list-home-list" data-bs-toggle="list"
                                                                href="#list-home-3" role="tab"
                                                                aria-controls="list-home"> <span><i
                                                                        class="fa-solid fa-arrow-trend-up"></i></span>
                                                                COMPLIANCE</a>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="tab-content" id="nav-tabContent"
                                                            data-aos="fade-up" aos-duration="700">

                                                            <div class="tab-pane fade show active" id="list-home-1"
                                                                role="tabpanel" aria-labelledby="list-home-list">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-lg-5 col-md-5 col-sm-9 col-9">
                                                                        <div class="services_tab_image">
                                                                            <img decoding="async"
                                                                                src="https://texicon-bd.com/Picture/anne-nygard-TVLBWsGjW-4-unsplash.jpg"
                                                                                alt="Company Attribute"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="services_tab_content">
                                                                            <p class="common_p">
                                                                            <p>From the first sample, we take care of
                                                                                the quality at every step, we identify
                                                                                the key points of each product to
                                                                                anticipate possible difficulties in
                                                                                production.</p>
                                                                            <p>We use the Lectra system to create and
                                                                                print the patterns which we then pass on
                                                                                to the manufacturers. All of these
                                                                                actions are meant to decrease the margin
                                                                                of error. Our in-house lab allows us to
                                                                                run the most common tests on each and
                                                                                every order.</p>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show " id="list-home-2"
                                                                role="tabpanel" aria-labelledby="list-home-list">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-lg-5 col-md-5 col-sm-9 col-9">
                                                                        <div class="services_tab_image">
                                                                            <img decoding="async"
                                                                                src="https://texicon-bd.com/Picture/cam-morin-knKm7u_7Ihw-unsplash.jpg"
                                                                                alt="Company Attribute"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="services_tab_content">
                                                                            <p class="common_p">
                                                                            <p>We are constantly looking for new
                                                                                fabrics, accessories, washes, print and
                                                                                embroidery techniques. To do so, we use
                                                                                our different production offices as a
                                                                                multi-sourcing network to offer the
                                                                                greatest variety to our customers. We
                                                                                are also constantly trying to improve
                                                                                the production processes in our own
                                                                                factories as well as our partner’s. We
                                                                                also made the decision to locate our
                                                                                Design and Graphic Departments in Dhaka
                                                                                (Bangladesh) to be as close as possible
                                                                                to the production facilities,
                                                                                encouraging and pushing them to perform
                                                                                in innovation and development to meet
                                                                                the ever-changing needs of the customer.
                                                                                Our expertise in Denim is highly
                                                                                appreciated by our customers.</p>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show " id="list-home-3"
                                                                role="tabpanel" aria-labelledby="list-home-list">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-lg-5 col-md-5 col-sm-9 col-9">
                                                                        <div class="services_tab_image">
                                                                            <img decoding="async"
                                                                                src="https://dongyi.hk/wp-content/uploads/2022/11/service_6360b732827b45.131012071667282738.jpg"
                                                                                alt="Company Attribute"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="services_tab_content">
                                                                            <p class="common_p">
                                                                            <p>Our production network is based on
                                                                                compliance, we guarantee our customers
                                                                                that their goods are produced in
                                                                                factories where the workers’ rights are
                                                                                respected.</p>
                                                                            <p>We have our own Compliance Department
                                                                                that constantly evaluates the factories
                                                                                and provides them with mandatory
                                                                                follow-up improvements. We constantly
                                                                                strive to improve the working
                                                                                conditions, safety and benefits of the
                                                                                workers. This is made possible by a
                                                                                long-term partnership with our clients
                                                                                and manufacturers.</p>
                                                                            <p>We are following international standards
                                                                                and code of conduct such as BSCI,
                                                                                Accord, Wrap, IC</p>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-c54c285 elementor-widget elementor-widget-home-page-ethics-certifications"
                        data-id="c54c285" data-element_type="widget"
                        data-widget_type="home-page-ethics-certifications.default">
                        <div class="elementor-widget-container">
                            <!-- vision part -->
                            <section class="vision-part" id="ethics">
                                <div class="container-fluid p_l_0">
                                    <div class="row m_l_0">
                                        <div class="col-lg-12 p_r_0 col-md-12 col-sm-12 col-12">
                                            <div class="visions_left_part">
                                                <div class="row m_l_0">

                                                    <div class="col-lg-7 p_l_0 visions_left_part_padding_right">
                                                        <div class="vision_left_part_image">
                                                            <!-- <img decoding="async" src="assets/images/7.png" alt="" class="img-fluid"> -->
                                                            <div class="vision_left_part_content">
                                                                <div class="vision-carosule">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-lg-11 m-auto col-xl-11 col-xxl-11 col-sm-12 col-md-12 col-12">
                                                                            <div class="vision-carousle-title"
                                                                                data-aos="fade-up" aos-duration="700">
                                                                                <h2>OUR MANUFACTURING PARTNERS ARE
                                                                                    COMPLIANT WITH INTERNATIONAL
                                                                                    STANDARDS AND CODE OF CONDUCT:</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-11 col-xl-11 col-xxl-11 col-sm-12 col-md-12 col-12">
                                                                            <div id="vision-list"class="vision-list-class"
                                                                                data-aos="fade-up" aos-duration="700">

                                                                                <div class="vision-item">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2022/11/manufacturing_636348c021ede9.476738431667451072.jpg"
                                                                                        alt="Manufacturing Image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="vision-item">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2022/11/manufacturing_636097a1e1a175.950427821667274657.jpg"
                                                                                        alt="Manufacturing Image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="vision-item">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2022/11/manufacturing_6360c69d5c8814.655635421667286685.jpg"
                                                                                        alt="Manufacturing Image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="vision-item">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2022/11/manufacturing_636348a9a5d821.217990631667451049.jpg"
                                                                                        alt="Manufacturing Image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="vision-item">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2022/11/manufacturing_636348b154fe28.186867471667451057.jpg"
                                                                                        alt="Manufacturing Image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="vision-item">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2022/11/manufacturing_636348a2d865e7.986277341667451042-1.jpg"
                                                                                        alt="Manufacturing Image"
                                                                                        class="img-fluid">
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5 ">
                                                        <div class="row justify-content-start">
                                                            <div
                                                                class="col-lg-11 col-xl-11 col-xxl-11 col-sm-12 col-md-12 col-12">
                                                                <div class="vision_right_part_content">
                                                                    <h1 class="common-title-right" data-aos="fade-up"
                                                                        aos-duration="700">Ethics</h1>

                                                                    <div class="our-vision-content" data-aos="fade-up"
                                                                        aos-duration="700">
                                                                        <h2>OUR VISION</h2>
                                                                        <p class="our-vision-content-p">
                                                                        <p>To become a reliable global apparel sourcing
                                                                            organization that provides excellence and
                                                                            quality through innovation with a
                                                                            forward-looking approach. We will achieve
                                                                            this position through innovations in
                                                                            products and business methods that add value
                                                                            to our customers and by meeting global
                                                                            standards in quality, customer service. </p>
                                                                        </p>
                                                                        <div class="our-vision-content-image">
                                                                            <div class="image-body-vision">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/tobias-van-schneider-gCeCpP15V1o-unsplash.jpg"
                                                                                    alt="Ethics" class="img-fluid">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-1cb4829 elementor-widget elementor-widget-home-page-products"
                        data-id="1cb4829" data-element_type="widget" data-widget_type="home-page-products.default">
                        <div class="elementor-widget-container">

                            <!-- product part -->
                            <section class="products-part" id="product">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-11 m-auto col-md-12 col-sm-12 col-12">
                                            <div class="products-part-main">
                                                <h1 class="common-title" data-aos="fade-up" aos-duration="700">
                                                    Products</h1>
                                                <div id="product_carousel_id" class="owl-carousel">


                                                    <div class="item">
                                                        <div class="row">

                                                            <div
                                                                class="col-lg-3 col-md-12 col-sm-12 col-12 col-xl-3 col-xxl-3">
                                                                <div class="slider-for-product">
                                                                    <div class="product-left-slider-content">
                                                                        <div class="product-left-slider-content-image"
                                                                            data-aos="fade-up" aos-duration="700">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/images.jpg"
                                                                                    alt="Category Image"
                                                                                    class="img-fluid"> </a>
                                                                            <h5 data-aos="fade-up" aos-duration="500"
                                                                                style="text-align: center; font-family: 'Playfair Display'; padding-top: 3px;">
                                                                                <b>KID'S FASHION</b></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-9 col-md-12 col-sm-12 col-8 col-xl-9 col-xxl-9 product_item_column"
                                                                data-aos="fade-up" aos-duration="700">
                                                                <div class="row" style="display: flex;">

                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/junko-nakase-Q-72wa9-7Dg-unsplash.jpg"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">KID'S
                                                                                    BOTTOM &amp; DENIM</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/junko-nakase-Q-72wa9-7Dg-unsplash.jpg"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">KID'S
                                                                                    JERSEY</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/sincerely-media-CFgRaouVyBM-unsplash.jpg"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">KID'S
                                                                                    KNITWEAR</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/waldemar-NPPNHZK1U0s-unsplash.jpg"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">KID'S
                                                                                    NIGHTWEAR</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/sincerely-media-CFgRaouVyBM-unsplash.jpg"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">KID'S
                                                                                    OUTERWEAR</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/sincerely-media-9ShY-Tq70Mc-unsplash.jpg"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">KID'S
                                                                                    SHIRT</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/priscilla-du-preez-DqJMxq5ZDqA-unsplash.jpg"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">KID'S
                                                                                    SWIM SHORTS</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://texicon-bd.com/Picture/clark-street-mercantile-qnKhZJPKFD8-unsplash.jpg"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">WOVEN
                                                                                    DRESS</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="item">
                                                        <div class="row">

                                                            <div
                                                                class="col-lg-3 col-md-12 col-sm-12 col-12 col-xl-3 col-xxl-3">
                                                                <div class="slider-for-product">
                                                                    <div class="product-left-slider-content">
                                                                        <div class="product-left-slider-content-image"
                                                                            data-aos="fade-up" aos-duration="700">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/category_6360fe0f842134.154846751667300879-1.png"
                                                                                    alt="Category Image"
                                                                                    class="img-fluid"> </a>
                                                                            <h5 data-aos="fade-up" aos-duration="500"
                                                                                style="text-align: center; font-family: 'Playfair Display'; padding-top: 3px;">
                                                                                <b>MEN’S FASHION</b></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-9 col-md-12 col-sm-12 col-8 col-xl-9 col-xxl-9 product_item_column"
                                                                data-aos="fade-up" aos-duration="700">
                                                                <div class="row" style="display: flex;">

                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2023/05/MENS-JACKETS-SHORTS_1.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">MEN'S
                                                                                    JACKETS &amp; SHORTS</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2023/05/MENS-SHIRT1.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">MEN'S
                                                                                    SHIRT</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2023/05/MENS-SWEATER.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">MEN'S
                                                                                    SWEATER</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/5.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">MEN’S
                                                                                    DENIM</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/6.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">MEN’S
                                                                                    JERSEY</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/category_636484149bcd46.739953661667531796.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">MEN’S
                                                                                    KNITWEAR</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/category_6363a274cbffe1.594346071667474036.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">MEN’S
                                                                                    OUTERWEAR</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2023/05/MENS-TAILORING.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="/">MENS
                                                                                    TAILORING</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="item">
                                                        <div class="row">

                                                            <div
                                                                class="col-lg-3 col-md-12 col-sm-12 col-12 col-xl-3 col-xxl-3">
                                                                <div class="slider-for-product">
                                                                    <div class="product-left-slider-content">
                                                                        <div class="product-left-slider-content-image"
                                                                            data-aos="fade-up" aos-duration="700">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/category_635fb50a85c2f0.760214351667216650-1.png"
                                                                                    alt="Category Image"
                                                                                    class="img-fluid"> </a>
                                                                            <h5 data-aos="fade-up" aos-duration="500"
                                                                                style="text-align: center; font-family: 'Playfair Display'; padding-top: 3px;">
                                                                                <b>WOMEN’S FASHION</b></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-9 col-md-12 col-sm-12 col-8 col-xl-9 col-xxl-9 product_item_column"
                                                                data-aos="fade-up" aos-duration="700">
                                                                <div class="row" style="display: flex;">

                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/womens-blouse/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2023/05/WOMENS-BLOUSE.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="https://dongyi.hk/product-category/womens-fashion/womens-blouse/">WOMEN'S
                                                                                    BLOUSE</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/womens-sweater/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/category_636484efd4b7f8.793238961667532015.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="https://dongyi.hk/product-category/womens-fashion/womens-sweater/">WOMEN'S
                                                                                    SWEATER</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/womens-tailoring/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2023/05/WOMENS-TAILORING.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="https://dongyi.hk/product-category/womens-fashion/womens-tailoring/">WOMEN'S
                                                                                    TAILORING</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/womens-denim/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2023/05/womens-jean.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="https://dongyi.hk/product-category/womens-fashion/womens-denim/">WOMEN’S
                                                                                    DENIM</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/womens-knitwear/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/category_63623f83b3cc30.094033851667383171.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="https://dongyi.hk/product-category/womens-fashion/womens-knitwear/">WOMEN’S
                                                                                    KNITWEAR</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/womens-nightwear/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2023/05/WOMENS-NIGHTWEAR_1.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="https://dongyi.hk/product-category/womens-fashion/womens-nightwear/">WOMEN’S
                                                                                    NIGHTWEAR</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/womens-tops-dresses/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/category_63623e727bb6c1.511760081667382898.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="https://dongyi.hk/product-category/womens-fashion/womens-tops-dresses/">WOMEN’S
                                                                                    TOPS &amp; DRESSES</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 p_l_r_1 col-md-3 col-sm-6 col-6"
                                                                        style=" min-height: 200px;">
                                                                        <div
                                                                            class="product-right-slider-content-image">
                                                                            <a
                                                                                href="https://dongyi.hk/product-category/womens-fashion/womens-woven-bottoms/">
                                                                                <img decoding="async"
                                                                                    src="https://dongyi.hk/wp-content/uploads/2022/11/category_63623eeef07105.216375621667383022.png"
                                                                                    alt="Category Image"
                                                                                    style="height: 240px"
                                                                                    class="img-fluid"> </a>
                                                                            <div class="product-right-title">
                                                                                <a
                                                                                    href="https://dongyi.hk/product-category/womens-fashion/womens-woven-bottoms/">WOMEN’S
                                                                                    WOVEN BOTTOMS</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- product part -->

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-880196a elementor-widget elementor-widget-html"
                        data-id="880196a" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <h1 style="text-align: center;" class="common-title aos-init" data-aos="fade-up"
                                aos-duration="700">OUR OFFICES</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-8189e00 elementor-invisible elementor-widget elementor-widget-agile-store-locator-addon"
                        data-id="8189e00" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="agile-store-locator-addon.default">
                        <div class="elementor-widget-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14593.937485750477!2d90.383766!3d23.872437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c32e15d7ec9d%3A0x7b4a57d7ad83ca8d!2sE-Tex%20Solution%20Ltd.!5e0!3m2!1sen!2sbd!4v1729874407415!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bb271e7 elementor-widget elementor-widget-home-page-clients"
                        data-id="bb271e7" data-element_type="widget" data-widget_type="home-page-clients.default">
                        <div class="elementor-widget-container">
                            <!------------------- client ---------------->
                            <section id="client" class="client-part">
                                <div class="content-box">

                                    <div class="client-title" data-aos="fade-up" aos-duration="700">
                                        <h3>we are blessed to work with leading brands and companies</h3>

                                        <div class="content-title-underline"></div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row wow animated">
                                            <div class="col-md-11 m-auto">
                                                <div id="client-list"class=" owl-carousel owl-theme"
                                                    data-aos="fade-up" aos-duration="700">

                                                    <div class="client" data-aos="fade-up" aos-duration="700">
                                                        <img decoding="async"
                                                            src="https://dongyi.hk/wp-content/uploads/2022/11/client_63625133ab0aa5.966212831667387699.png"
                                                            alt="Lefties" class="img-fluid">
                                                    </div>
                                                    <div class="client" data-aos="fade-up" aos-duration="700">
                                                        <img decoding="async"
                                                            src="https://dongyi.hk/wp-content/uploads/2022/11/client_636251f5aa0082.675279551667387893.png"
                                                            alt="NEXT" class="img-fluid">
                                                    </div>
                                                    <div class="client" data-aos="fade-up" aos-duration="700">
                                                        <img decoding="async"
                                                            src="https://dongyi.hk/wp-content/uploads/2023/01/John_Lewis__Partners_logo.svg.png"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                    <div class="client" data-aos="fade-up" aos-duration="700">
                                                        <img decoding="async"
                                                            src="https://dongyi.hk/wp-content/uploads/2022/11/client_63624a536a9400.540626301667385939.png"
                                                            alt="LPP" class="img-fluid">
                                                    </div>
                                                    <div class="client" data-aos="fade-up" aos-duration="700">
                                                        <img decoding="async"
                                                            src="https://dongyi.hk/wp-content/uploads/2022/11/1.png"
                                                            alt="MLSE" class="img-fluid">
                                                    </div>
                                                    <div class="client" data-aos="fade-up" aos-duration="700">
                                                        <img decoding="async"
                                                            src="https://dongyi.hk/wp-content/uploads/2022/11/4-1.png"
                                                            alt="" class="img-fluid">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0c7a090 elementor-widget elementor-widget-home-page-management"
                        data-id="0c7a090" data-element_type="widget"
                        data-widget_type="home-page-management.default">
                        <div class="elementor-widget-container">
                            <!-- management part -->
                            <section class="management-part" id="management">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-11 m-auto col-md-11 col-sm-12 col-12">
                                            <div class="management-part-inner">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="management-left-content" data-aos="fade-up"
                                                            aos-duration="700">
                                                            <h1 class="common-title" data-aos="fade-up"
                                                                aos-duration="700">Management</h1>
                                                            <div class="management-left-content-image"
                                                                data-aos="fade-up" aos-duration="700">
                                                                <img decoding="async"
                                                                    src="https://media-ccu1-1.cdn.whatsapp.net/v/t61.24694-24/412329711_1393569038249722_9120787389087131547_n.jpg?ccb=11-4&oh=01_Q5AaIHQ0I8_98bBL2IsJMKOmD2kYn815_ujteLyqE7HsvJb4&oe=672222F9&_nc_sid=5e03e0&_nc_cat=101"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <h3 data-aos="fade-up" aos-duration="700">MD. RASEL
                                                                PARVES</h3>
                                                            <h4 class="md-designation" data-aos="fade-up"
                                                                aos-duration="700">Managing Director</h4>
                                                            <p data-aos="fade-up" aos-duration="700">
                                                            <p>Customer's &amp; Business partner's satisfaction is one
                                                                of the central aspects of our organizational culture.
                                                                Total Customer's &amp; Business partner's satisfaction
                                                                is the only success formula that drives us to be in this
                                                                competitive fashion clothing industry.I would like to
                                                                sincerely thank our valued clients &amp; business
                                                                partners for your continued support in ensuring that we
                                                                remain our long-term relationship to have good business
                                                                in future.</p>
                                                            </p>

                                                            <div class="message_button">
                                                                <a href="/md-message.php"
                                                                    class="common_button">Read More</a>
                                                            </div>

                                                            <br>
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="management-right-content">
                                                            <div class="row management-right-content-single-row">


                                                                <div
                                                                    class="col-lg-4 management-right-content-single-row-child">
                                                                    <div
                                                                        class="management-right-content-single-column">
                                                                        <div class="row">

                                                                            <div
                                                                                class="col-lg-12 col-md-6 col-sm-6 col-6">
                                                                                <div class="management-right-content-image"
                                                                                    data-aos="fade-up"
                                                                                    aos-duration="900">
                                                                                    <img decoding="async"
                                                                                        src="https://texicon-bd.com/Picture/junko-nakase-Q-72wa9-7Dg-unsplash.jpg"
                                                                                        alt=""
                                                                                        class="img-fluid">
                                                                                    <div
                                                                                        class="management-image-overlay">
                                                                                        <div
                                                                                            class="management-image-overlay-content">
                                                                                            <p
                                                                                                class="management-name">
                                                                                                Paritosh Chandra Dash
                                                                                            </p>
                                                                                            <p
                                                                                                class="management-position">
                                                                                                Director
                                                                                                <br>
                                                                                                Tex Icon
                                                                                            </p>
                                                                                            <div
                                                                                                class="management-image-overlay-social">
                                                                                                <!-- <a href=""><i class="fa-brands fa-facebook-f"></i></a> -->
                                                                                                <!-- <a href=""><i class="fa-brands fa-twitter"></i></a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-12 col-md-6 col-sm-6 col-6">
                                                                                <div class="management-right-content-image"
                                                                                    data-aos="fade-up"
                                                                                    aos-duration="900">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2023/05/textured-solid-background-grey-color-ai1dty0vlm7xweo0.jpg "
                                                                                        alt=""
                                                                                        class="img-fluid">
                                                                                    <div
                                                                                        class="management-image-overlay">
                                                                                        <div
                                                                                            class="management-image-overlay-content">
                                                                                            <p
                                                                                                class="management-name">
                                                                                            </p>
                                                                                            <p
                                                                                                class="management-position">

                                                                                                <br>
                                                                                            </p>
                                                                                            <div
                                                                                                class="management-image-overlay-social">
                                                                                                <!-- <a href=""><i class="fa-brands fa-facebook-f"></i></a> -->
                                                                                                <!-- <a href=""><i class="fa-brands fa-twitter"></i></a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-4 management-right-content-single-row-child">
                                                                    <div
                                                                        class="management-right-content-single-column">
                                                                        <div class="row">

                                                                            <div
                                                                                class="col-lg-12 col-md-6 col-sm-6 col-6">
                                                                                <div class="management-right-content-image"
                                                                                    data-aos="fade-up"
                                                                                    aos-duration="900">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2023/05/textured-solid-background-grey-color-ai1dty0vlm7xweo0.jpg "
                                                                                        alt=""
                                                                                        class="img-fluid">
                                                                                    <div
                                                                                        class="management-image-overlay">
                                                                                        <div
                                                                                            class="management-image-overlay-content">
                                                                                            <p
                                                                                                class="management-name">
                                                                                            </p>
                                                                                            <p
                                                                                                class="management-position">

                                                                                                <br>
                                                                                            </p>
                                                                                            <div
                                                                                                class="management-image-overlay-social">
                                                                                                <!-- <a href=""><i class="fa-brands fa-facebook-f"></i></a> -->
                                                                                                <!-- <a href=""><i class="fa-brands fa-twitter"></i></a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-12 col-md-6 col-sm-6 col-6">
                                                                                <div class="management-right-content-image"
                                                                                    data-aos="fade-up"
                                                                                    aos-duration="900">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2022/11/6.jpg "
                                                                                        alt=""
                                                                                        class="img-fluid">
                                                                                    <div
                                                                                        class="management-image-overlay">
                                                                                        <div
                                                                                            class="management-image-overlay-content">
                                                                                            <p
                                                                                                class="management-name">
                                                                                                Sunil Brahmbhatt</p>
                                                                                            <p
                                                                                                class="management-position">
                                                                                                Chief Operating Officer
                                                                                                (COO)
                                                                                                <br>
                                                                                                Tex Icon
                                                                                            </p>
                                                                                            <div
                                                                                                class="management-image-overlay-social">
                                                                                                <!-- <a href=""><i class="fa-brands fa-facebook-f"></i></a> -->
                                                                                                <!-- <a href=""><i class="fa-brands fa-twitter"></i></a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-4 management-right-content-single-row-child">
                                                                    <div
                                                                        class="management-right-content-single-column">
                                                                        <div class="row">

                                                                            <div
                                                                                class="col-lg-12 col-md-6 col-sm-6 col-6">
                                                                                <div class="management-right-content-image"
                                                                                    data-aos="fade-up"
                                                                                    aos-duration="900">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2022/11/sophy.png "
                                                                                        alt=""
                                                                                        class="img-fluid">
                                                                                    <div
                                                                                        class="management-image-overlay">
                                                                                        <div
                                                                                            class="management-image-overlay-content">
                                                                                            <p
                                                                                                class="management-name">
                                                                                                Sophy Sollars</p>
                                                                                            <p
                                                                                                class="management-position">
                                                                                                Sales &amp; Design
                                                                                                Director
                                                                                                <br>
                                                                                                Dongyi Sourcing UK
                                                                                                Limited
                                                                                            </p>
                                                                                            <div
                                                                                                class="management-image-overlay-social">
                                                                                                <!-- <a href=""><i class="fa-brands fa-facebook-f"></i></a> -->
                                                                                                <!-- <a href=""><i class="fa-brands fa-twitter"></i></a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-12 col-md-6 col-sm-6 col-6">
                                                                                <div class="management-right-content-image"
                                                                                    data-aos="fade-up"
                                                                                    aos-duration="900">
                                                                                    <img decoding="async"
                                                                                        src="https://dongyi.hk/wp-content/uploads/2023/05/textured-solid-background-grey-color-ai1dty0vlm7xweo0.jpg "
                                                                                        alt=""
                                                                                        class="img-fluid">
                                                                                    <div
                                                                                        class="management-image-overlay">
                                                                                        <div
                                                                                            class="management-image-overlay-content">
                                                                                            <p
                                                                                                class="management-name">
                                                                                            </p>
                                                                                            <p
                                                                                                class="management-position">

                                                                                                <br>
                                                                                            </p>
                                                                                            <div
                                                                                                class="management-image-overlay-social">
                                                                                                <!-- <a href=""><i class="fa-brands fa-facebook-f"></i></a> -->
                                                                                                <!-- <a href=""><i class="fa-brands fa-twitter"></i></a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-2f455f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="2f455f6" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7cef7b9"
                data-id="7cef7b9" data-element_type="column">
                <div class="elementor-widget-wrap">
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>
