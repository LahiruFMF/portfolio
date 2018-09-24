<?php include('asset.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <title>Title of the document</title>
<!--    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>-->

    <script src="<?= asset_path('jquery.min.js', 'js'); ?>"></script>
    <script type="text/javascript" src="lib/jquery.powertip-1.3.1/jquery.powertip.js"></script>
    <link rel="stylesheet" type="text/css" href="lib/jquery.powertip-1.3.1/css/jquery.powertip.css" />

    <script src="<?= asset_path('common.js', 'js'); ?>"></script>
    <link rel="stylesheet" href="<?= asset_path('theme.css', 'css'); ?>">
    <noscript><link rel="stylesheet" href="<?= asset_path('noscript.css', 'css'); ?>" /></noscript>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Panel (Banner) -->
        <section class="panel banner right">
            <div class="content color0 span-3-75">
                <h1 class="major">Hello!<br />
                    I'm Lahiru Chathuranga</h1>
                <div class="sub-type">Front-end developer, UI/UX Designer</div>
                <p style="color: #a897a9;">
                    I do craft delightful user experience design and development.
                    My goal is to bridge the gap between business objectives and customer needs through technology to make the world a better place.
                </p>


                <ul class="actions">
                    <li><a href="#first" class="button primary color1 circle icon fa-angle-right">Next</a></li>
                </ul>
            </div>
            <div class="image filtered span-1-75" data-position="25% 25%">
                <div class="logo-container">
                    <img class="logo" src="dist/img/logo.svg"></div>
                <img src="dist/img/pic01.jpg" alt="" />
            </div>
        </section>

        <!-- Panel (Spotlight) -->
        <section class="panel banner right cover-bg" id="first">
            <div class="content span-3-75 story">
                <h2 class="major">My Story</h2>
                <p>
                    I grew up іn thе midst оf aesthetic and сreative fаmіlу bасkgrоund which hеlрѕ tо drive my раѕѕіоn for UI/UX dеѕіgnіng аnd dеvеlорmеnt. Grоwіng uр, I
                    share a ѕtrоng lоvе fоr аrtѕ аnd illustrations, working wіth colors and creative stuff.
                    After engaging with Software Engineering degree in university, my path focused onto front-end development field which leads to expand my creativity with latest cutting-edge web technologies.
                    I do high attention for details and make it my priority to create a unique and innovative solution for every project I take.
                    I am good in constructing standard and delightfull websites, web applications as well as interactive mobile applications.
                </p>
            </div>
            <div class="image span-1-75 time-line" data-position="top left">
                <img src="dist/img/path.png" alt="" />
            </div>
        </section>

        <!-- Panel -->
        <section class="panel spotlight medium right color1" id="skillPanel">
            <div class="intro skill-intro">
                <div class="skills">

                    <div class="ratings">
                        <h2>My Skills</h2>
                        <div class="skill-set-wrapper">
                            <div class="col-6">
                                <div  class="skill-item" id="html">
                                    <div class="skill-name">
                                        HTML5/CSS3
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="skill-item" id="front-end">
                                    <div class="skill-name">
                                        Front-end development
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="skill-item" id="sass">
                                    <div class="skill-name">
                                        SASS/Compass
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="skill-item" id="creative">
                                    <div class="skill-name">
                                        Creative Thinking
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="skill-item" id="project-management">
                                    <div class="skill-name">
                                        Project Management
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div  class="skill-item" id="uiux">
                                    <div class="skill-name">
                                        UI/UX Designing
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="skill-item" id="wireframind-prototyping">
                                    <div class="skill-name">
                                        Wireframing & Prototyping
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="skill-item" id="drawing">
                                    <div class="skill-name">
                                        Drawing & Illustration
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="skill-item" id="typography">
                                    <div class="skill-name">
                                        Typography
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="skill-item" id="branding">
                                    <div class="skill-name">
                                        Branding
                                    </div>
                                    <div class="rate">
                                        <div class="progress-wrapper">
                                            <div class="progress-fill"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tools">
                        <h2>Tools & Technologies</h2>
                        <div class="tool-box">
                            <div class="table">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <img class="html" src="dist/img/tools/icon-html5.png" alt="html5" title="HTML5"  >
                                    </div>
                                    <div class="table-cell">
                                        <img class="css" src="dist/img/tools/icon-css3.png" alt="html5" title="CSS3" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="js" src="dist/img/tools/icon-js.png" alt="html5" title="JavaScript" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="jq" src="dist/img/tools/icon-jquery.png" alt="html5" title="jQuery" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="ng" src="dist/img/tools/icon-angular.png" alt="html5" title="Angular" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="php" src="dist/img/tools/icon-php.png" alt="html5" title="PHP" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="mysql" src="dist/img/tools/icon-mysql.png" alt="html5" title="MySQL" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="git" src="dist/img/tools/icon-git.png" alt="html5" title="GIT" >
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-cell">
                                        <img class="ps" src="dist/img/tools/icon-ps.png" alt="html5" title="Adobe Photoshop" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="ai" src="dist/img/tools/icon-ai.png" alt="html5" title="Adobe Illustrator" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="sass" src="dist/img/tools/icon-sass.png" alt="html5" title="SASS" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="gulp" src="dist/img/tools/icon-gulp.png" alt="html5" title="Gulp" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="ij" src="dist/img/tools/icon-ideaj.png" alt="html5" title="IntelliJ IDEA" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="vsc" src="dist/img/tools/icon-vscode.png" alt="html5" title="Visual Studio Code" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="mac" src="dist/img/tools/icon-apple.png" alt="html5" title="macOS" >
                                    </div>
                                    <div class="table-cell">
                                        <img class="win" src="dist/img/tools/icon-win.png" alt="html5" title="Windows" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="image filtered tinted" data-position="top left">
                <img src="dist/img/pic02.jpg" alt="" />
            </div>
        </section>

        <!-- Panel -->
        <section class="panel">
            <div class="intro color2">
                <h2 class="major">Elit integer</h2>
                <p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam.</p>
            </div>
            <div class="gallery">
                <div class="group span-3">
                    <div datasrc="dist/img/gallery/fulls/01.png" class="image filtered span-3 gitem" data-position="bottom">
                        <img src="dist/img/gallery/thumbs/01.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                            <div class="item-icon"></div>
                            <div class="item-name">Sampath Bank Ultra Rewards Points System</div>
                            <div class="category">UI/UX Design and Development</div>
                        </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/01.png" class="port-title" datasrc="Title">Sampath Bank Ultra Rewards Points System</div>
                        <div class="port-description" datasrc="Title">
                            This website is developed for Sampath Bank Ultra Rewards program which support users to spend their loyalty points in different ways such as for
                            flight booking, hotel booking, buying vouchers for different merchants, Online shopping etc.
                        </div>
                    <div class="primary-color-list">#f75704#3d5064</div>
                    <div class="design-tech-list">#ps#ai</div>
                    <div class="dev-tech-list">#html#css#sass#js#jq</div>
                    <div class="reference">sample</div>
                    </div>
                    <div datasrc="dist/img/gallery/fulls/02.png" class="image filtered span-3 gitem" data-position="center"><img src="dist/img/gallery/thumbs/02.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">findmyfare.com website</div>
                                <div class="category">UI/UX Design and Development</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/02.png" class="port-title" datasrc="Title">findmyfare.com website</div>
                        <div class="port-description" datasrc="Title">
                            Findmyfare.com is a unique and first of its kind online travel portal in Sri Lanka to provide affordable air tickets, hotel accommodations and exciting holiday packages.
                        </div>
                        <div class="primary-color-list">#045894#fb4f0f</div>
                        <div class="design-tech-list">#ps#ai</div>
                        <div class="dev-tech-list">#html#css#sass#js#jq#ng</div>
                        <div class="reference">https://www.findmyfare.com/</div>
                    </div>

                </div>
                <div class="group span-3">
                    <div datasrc="dist/img/gallery/fulls/03.png" class="image filtered span-3 gitem" data-position="bottom"><img src="dist/img/gallery/thumbs/eb.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">EB Creasy website</div>
                                <div class="category">UI/UX Design and Development</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/03.png" class="port-title" datasrc="Title">EB Creasy website</div>
                        <div class="port-description" datasrc="Title">
                            This website is developed for EB Creasy & Company PLC which provides different range of products such as automotive, industrial and home solutions,renewable energy solution.
                            I mainly focus on this website to highlight the products and brands to the users to get the overall idea of the services from the first sight when they visit.
                        </div>
                        <div class="primary-color-list">#ffe01c#3b3b3b</div>
                        <div class="design-tech-list">#ps#ai</div>
                        <div class="dev-tech-list">#html#css#sass#js#jq</div>
                    </div>

                    <div datasrc="dist/img/gallery/fulls/04.png" class="image filtered span-3 gitem" data-position="bottom"><img src="dist/img/gallery/thumbs/sgx.png" alt="" />

                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">Singapore Exchange PostTrade Product</div>
                                <div class="category">UI/UX Design and Development</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/03.png" class="port-title" datasrc="Title">Singapore Exchange PostTrade Product (Trading System)</div>
                        <div class="port-description" datasrc="Title">
                            When I was working in MillenniumIT I got an opportunity to redesign the Singapore Exchange PostTrade product which support different types of services in trading platform. The main challenge was there to organize the
                            components and elements in a single viewport to give the best user experience to the customers. After going through several iteration in design stage I was come up with this design and developed the user interfaces
                            with using JAVA language on top of Vaadin framework.
                        </div>
                        <div class="primary-color-list">#324561#49c665#ffffff</div>
                        <div class="design-tech-list">#ps#ai#is</div>
                        <div class="dev-tech-list">#java#vaadin#html#sass#js</div>
                        <div class="reference">sample</div>
                    </div>
                </div>
                <div datasrc="dist/img/gallery/fulls/05.png" class="image filtered span-2-5 gitem" data-position="top"><img src="dist/img/gallery/thumbs/04.png" alt="" />
                    <div class="item-description"  >
                        <div class="item-desc-container">
                            <div class="item-icon"></div>
                            <div class="item-name">MillenniumIT Dev Day Mobile App</div>
                            <div class="category">Mobile App Design and Development</div>
                        </div>
                    </div>
                    <div datatarget="dist/img/gallery/fulls/05.png" class="port-title" datasrc="Title">MillenniumIT Dev Day mobile application</div>
                    <div class="port-description" datasrc="Title">
                        Developer Day of MillenniumIT is the annual gathering of all the developers within the company. Several industry leads also participate with this event to share thier knowledge and experience with the employees.
                        So I developed a mobile app for the event to show the event location, agenda, speakers and other information. This app was developed using jQuery Mobile Bootstrap3 and phoneGap.
                    </div>
                    <div class="primary-color-list">#214756#f6a522</div>
                    <div class="design-tech-list">#ps#ai</div>
                    <div class="dev-tech-list">#cordova#pg#html#css#jq</div>
                    <div class="reference">sample</div>

                </div>
                <div class="group span-4-5">
                    <div datasrc="dist/img/gallery/fulls/06.png" class="image filtered span-3 gitem" data-position="top"><img src="dist/img/gallery/thumbs/05.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">Delaiah</div>
                                <div class="category">Logo Design</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/03.png" class="port-title" datasrc="Title">Delaiah brand logo design</div>
                        <div class="port-description" datasrc="Title">
                            Delaiah is a name of a ladies shoe brand which is going to be published very soon in Sri Lanka. So I was asked to design the logo for this brand. The main requirement of this logo was to create a typographic logo
                            which should be with neat and clean design.
                        </div>
                        <div class="primary-color-list">#cba858#ddbe5e#f2e7b0</div>
                        <div class="design-tech-list">#ps#ai#is</div>
                        <div class="dev-tech-list"></div>
                        <div class="reference">sample</div>
                    </div>
                    <div datasrc="dist/img/gallery/fulls/09.png" class="image filtered span-1-5 gitem" data-position="center"><img src="dist/img/gallery/thumbs/06.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">Smartnav Mobile App</div>
                                <div class="category">Logo Design</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/03.png" class="port-title" datasrc="Title">Smartnav mobile app logo design</div>
                        <div class="port-description" datasrc="Title">
                            Smartnav is a mobile app which navigate the users in indoor environment. This application is developed for a research project in University. So I designed this logo for the application to emphasise the feeling of navigation and location.
                        </div>
                        <div class="primary-color-list">#ffc642#fe0033</div>
                        <div class="design-tech-list">#ai</div>
                        <div class="dev-tech-list"></div>
                        <div class="reference">sample</div>

                    </div>
                    <div datasrc="dist/img/gallery/fulls/07.png" class="image filtered span-1-5 gitem" data-position="bottom"><img src="dist/img/gallery/thumbs/07.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">NavigateX</div>
                                <div class="category">Logo Design</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/03.png" class="port-title" datasrc="Title">NavigateX logo design</div>
                        <div class="port-description" datasrc="Title">This logo is also designed for a indoor navigation system  mobile application.</div>
                        <div class="primary-color-list">#2b9ffb#21dfac#174669</div>
                        <div class="design-tech-list">#is</div>
                        <div class="dev-tech-list"></div>
                        <div class="reference">sample</div>

                    </div>
                    <div datasrc="dist/img/gallery/fulls/08.png" class="image filtered span-3 gitem" data-position="top"><img src="dist/img/gallery/thumbs/08.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">Switch borad</div>
                                <div class="category">UI Design and Development</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/03.png" class="port-title" datasrc="Title">Realtime switch borad</div>
                        <div class="port-description" datasrc="Title">
                            This interface is designed and developed to display the status of a real world switch board system. When the actual switches are changed, this application will display the same in the screen realtime.
                            Also it will display the humidity battery level and the signal strength. This is a completely dynamic UI which can change switch state(on/off), wiring system and the temperature values.
                        </div>
                        <div class="primary-color-list">#626262#fe3a3a#2ab700#31a0ff</div>
                        <div class="design-tech-list">#is</div>
                        <div class="dev-tech-list">#html#css#sass#js#jq</div>
                        <div class="reference">sample</div>

                    </div>
                </div>
                <div class="group span-3">
                <div datasrc="dist/img/gallery/fulls/10.png" class="image filtered span-1-5 gitem" data-position="center"><img src="dist/img/gallery/thumbs/09.png" alt="" />
                    <div class="item-description"  >
                        <div class="item-desc-container">
                            <div class="item-icon"></div>
                            <div class="item-name">Supplier Evaluation System</div>
                            <div class="category">UI/UX Design, Java Development</div>
                        </div>
                    </div>
                    <div datatarget="dist/img/gallery/fulls/03.png" class="port-title" datasrc="Title">SES2011 - Supplier Evaluation System</div>
                    <div class="port-description" datasrc="Title">
                        SES2011 is developed for DSI - D Samson Industries (Pvt) Ltd. which handles all the supplier process and generates several reports consists with the results of the evaluation. The system is developed using JAVA SE Edition.
                    </div>
                    <div class="primary-color-list">#f30000#690000#6bcbee</div>
                    <div class="design-tech-list">#ps</div>
                    <div class="dev-tech-list">#java</div>
                    <div class="reference">sample</div>
                </div>
                    <div datasrc="dist/img/gallery/fulls/11.png" class="image filtered span-1-5 gitem" data-position="center"><img src="dist/img/gallery/thumbs/11.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">SES2011 - Supplier Evaluation System</div>
                                <div class="category">UI/UX Design, Java Development</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/01.png" class="port-title" datasrc="Title">DMPO - Supplier Management System</div>
                        <div class="port-description" datasrc="Title">
                            DMPO Anuradhapura is a JAVA based desktop application which manage the milk suppliers in Anuradhapura district in Sri Lanka. The client for this project was the District Milk Producers Organization in Anuradhapura.
                        </div>
                        <div class="primary-color-list">#01c6fd#214952</div>
                        <div class="design-tech-list">#ps</div>
                        <div class="dev-tech-list">#java</div>
                        <div class="reference">sample</div>
                    </div>
                    <div datasrc="dist/img/gallery/fulls/12.png" class="image filtered span-3 gitem" data-position="bottom">
                        <img src="dist/img/gallery/thumbs/12.png" alt="" />
                        <div class="item-description"  >
                            <div class="item-desc-container">
                                <div class="item-icon"></div>
                                <div class="item-name">Dynamic Energy Meter</div>
                                <div class="category">UI/UX Design and Development</div>
                            </div>
                        </div>
                        <div datatarget="dist/img/gallery/fulls/12.png" class="port-title" datasrc="Title">Dynamic Energy Meter</div>
                        <div class="port-description" datasrc="Title">
                            This meter was designed and developed to showcase the RPM(Revolutions Per Minute) and PSI(Pounds per Square Inch) values in real time.
                        </div>
                        <div class="primary-color-list">#f75704#3d5064</div>
                        <div class="design-tech-list">#ps#ai</div>
                        <div class="dev-tech-list">#html#css#sass#js#jq</div>
                        <div class="reference">sample</div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Panel -->
        <section class="panel color4-alt">
            <div class="intro color4">
                <h2 class="major">Contact</h2>
                <p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam.</p>
            </div>
            <div class="inner columns divided">
                <div class="span-3-25">
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="4"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="button primary" /></li>
                        </ul>
                    </form>
                </div>
                <div class="span-1-5">
                    <ul class="contact-icons color1">
                        <li class="icon fa-twitter"><a href="#">@untitled-tld</a></li>
                        <li class="icon fa-facebook"><a href="#">facebook.com/untitled</a></li>
                        <li class="icon fa-snapchat-ghost"><a href="#">@untitled-tld</a></li>
                        <li class="icon fa-instagram"><a href="#">@untitled-tld</a></li>
                        <li class="icon fa-medium"><a href="#">medium.com/untitled</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Panel -->
        <section class="panel color2-alt">
            <div class="intro color2">
                <h2 class="major">Elements</h2>
                <p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam. </p>
            </div>
            <div class="inner columns aligned">
                <div class="span-2-75">

                    <h3 class="major">Text</h3>
                    <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                        This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                        This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>

                    <h1>Heading Level 1</h1>
                    <h2>Heading Level 2</h2>
                    <h3>Heading Level 3</h3>
                    <h4>Heading Level 4</h4>
                    <h5>Heading Level 5</h5>
                    <h6>Heading Level 6</h6>

                </div>
                <div class="span-3">

                    <h4>Blockquote</h4>
                    <blockquote>Lorem ipsum dolor sit amet. Felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in vestibulum. Blandit adipiscing eu iaculis volutpat ac adipiscing volutpat ac adipiscing faucibus.</blockquote>

                    <h4>Preformatted</h4>
                    <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + (i++);
    deck.shuffle();
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>

                </div>
                <div class="span-1-25">

                    <h3 class="major">Lists</h3>

                    <h4>Unordered</h4>
                    <ul>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Etiam vel felis viverra.</li>
                    </ul>

                    <h4>Alternate</h4>
                    <ul class="alt">
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Etiam vel felis viverra.</li>
                        <li>Felis enim feugiat.</li>
                    </ul>

                </div>
                <div class="span-1-5">

                    <h4>Ordered</h4>
                    <ol>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Dolor pulvinar etiam.</li>
                        <li>Etiam vel felis viverra.</li>
                        <li>Felis enim feugiat.</li>
                        <li>Etiam vel felis lorem.</li>
                    </ol>

                    <h4>Actions</h4>
                    <ul class="actions">
                        <li><a href="#" class="button primary color2">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                    </ul>
                    <ul class="actions stacked">
                        <li><a href="#" class="button primary color2">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                    </ul>

                </div>
                <div class="span-1-25">

                    <h4>Icons</h4>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
                    </ul>

                    <h4>Contact Icons</h4>
                    <ul class="contact-icons color2">
                        <li class="icon fa-twitter"><a href="#">Twitter</a></li>
                        <li class="icon fa-facebook"><a href="#">Facebook</a></li>
                        <li class="icon fa-instagram"><a href="#">Instagram</a></li>
                        <li class="icon fa-github"><a href="#">GitHub</a></li>
                        <li class="icon fa-medium"><a href="#">Medium</a></li>
                    </ul>

                </div>
                <div class="span-3">
                    <h3 class="major">Table</h3>
                    <h4>Default</h4>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Item One</td>
                                <td>Ante turpis integer aliquet porttitor.</td>
                                <td>29.99</td>
                            </tr>
                            <tr>
                                <td>Item Two</td>
                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                <td>19.99</td>
                            </tr>
                            <tr>
                                <td>Item Three</td>
                                <td> Morbi faucibus arcu accumsan lorem.</td>
                                <td>29.99</td>
                            </tr>
                            <tr>
                                <td>Item Four</td>
                                <td>Vitae integer tempus condimentum.</td>
                                <td>19.99</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td>100.00</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="span-3">
                    <h4>Alternate</h4>
                    <div class="table-wrapper">
                        <table class="alt">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Item One</td>
                                <td>Ante turpis integer aliquet porttitor.</td>
                                <td>29.99</td>
                            </tr>
                            <tr>
                                <td>Item Two</td>
                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                <td>19.99</td>
                            </tr>
                            <tr>
                                <td>Item Three</td>
                                <td> Morbi faucibus arcu accumsan lorem.</td>
                                <td>29.99</td>
                            </tr>
                            <tr>
                                <td>Item Four</td>
                                <td>Vitae integer tempus condimentum.</td>
                                <td>19.99</td>
                            </tr>
                            <tr>
                                <td>Item Five</td>
                                <td>Ante turpis integer aliquet porttitor.</td>
                                <td>29.99</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td>100.00</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="span-2-25">
                    <h3 class="major">Buttons</h3>
                    <ul class="actions">
                        <li><a href="#" class="button primary color2">Primary</a></li>
                        <li><a href="#" class="button">Default</a></li>
                    </ul>
                    <ul class="actions">
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button large">Large</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                    </ul>
                    <ul class="actions">
                        <li><a href="#" class="button primary color2 icon fa-cog">Icon</a></li>
                        <li><a href="#" class="button icon fa-diamond">Icon</a></li>
                    </ul>
                    <ul class="actions">
                        <li><span class="button primary color2 disabled">Disabled</span></li>
                        <li><span class="button disabled">Disabled</span></li>
                    </ul>
                    <ul class="actions">
                        <li><a href="#" class="button primary color2 circle icon fa-cog">Icon</a></li>
                        <li><a href="#" class="button circle icon fa-diamond">Icon</a></li>
                    </ul>
                </div>
                <div class="span-4-5">
                    <h3 class="major">Form</h3>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field third">
                                <label for="demo-name">Name</label>
                                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
                            </div>
                            <div class="field third">
                                <label for="demo-email">Email</label>
                                <input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
                            </div>
                            <div class="field third">
                                <label for="demo-category">Category</label>
                                <div class="select-wrapper">
                                    <select name="demo-category" id="demo-category">
                                        <option value="">-</option>
                                        <option value="1">Manufacturing</option>
                                        <option value="1">Shipping</option>
                                        <option value="1">Administration</option>
                                        <option value="1">Human Resources</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field quarter">
                                <input type="radio" id="demo-priority-low" name="demo-priority" class="color2" checked />
                                <label for="demo-priority-low">Low Priority</label>
                            </div>
                            <div class="field quarter">
                                <input type="radio" id="demo-priority-high" name="demo-priority" class="color2" />
                                <label for="demo-priority-high">High Priority</label>
                            </div>
                            <div class="field quarter">
                                <input type="checkbox" id="demo-copy" name="demo-copy" class="color2" />
                                <label for="demo-copy">Email a copy</label>
                            </div>
                            <div class="field quarter">
                                <input type="checkbox" id="demo-human" name="demo-human" class="color2" checked />
                                <label for="demo-human">Not a robot</label>
                            </div>
                            <div class="field">
                                <label for="demo-message">Message</label>
                                <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="2"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary color2" /></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>

        <!-- Copyright -->
        <div class="copyright"><div>Made with <span class="icon-love"><img src="dist/img/love-icon.png"></span> by Lahiru Chathuranga</div><div class="policy">All rights reserved.</div> </div>

    </div>

</div>

<!-- Scripts -->
<script src="<?= asset_path('browser.min.js', 'js'); ?>"></script>
<script src="<?= asset_path('breakpoints.min.js', 'js'); ?>"></script>
<script src="<?= asset_path('main.js', 'js'); ?>"></script>

</body>
</html>