<!--
		THE GREAT TODO LIST:
-- Vervangen front-page image
-- beschermen van telefoon nummer
-- beschermen tegen email spam
-- 2 images aan "over mij" toevoegen (1/2 gedaan)
-- Vertalingen
-- Skills en Capaciteiten icoontjes aanpassen
-- zoeken naar <br /> tags. verwijderen door !! in de blade tags te gebruiken, en 1 openings/sluitings accolade te verwijderen.
-- portfolio images uploaden. tekst erbij?
-- Geluid doet het niet.

-- at todos opzoeken en verwerken. of iig hier in zetten :)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="robots" content="index, follow"/>
    <title>{{ __("lang.window_title") }} </title>
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font Roboto -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,300,700,100italic,300italic,400" rel="stylesheet" type="text/css">
    <!-- Bootstrap 3.3.5 -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Black Style MyWALL -->
    <link rel="stylesheet" type="text/css" href="css/app.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Modal Window Contact me -->
<div class="modal fade" id="callmeModal" tabindex="-1" aria-hidden="true" role="dialog" aria-labelledby="ModalCall" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h2 class="modal-title getmetelf" id="ModalCall">{{ __("lang.chapter_contact") }}</h2>
            </div>
            <div class="modal-body">
                <!-- Your phone number -->
                <div class="myphone"><p class="greynum">+31</p> 06 18108714</div> <!-- @todo beschermen! -->
                <!-- Contact hours -->
                <div class="contacthours">
                    <p class="hourcall">{{ __("lang.contact_hours_desc") }} </p>
                    <div class="rightcall">
                        <p class="dayscall">{{ __("lang.contact_hours_days_short") }}</p>
                        <p class="horario">{{ __("lang.contact_hours_times") }}</p>
                        <p class="dayscall">{{ __("lang.contact_hours_days_weekend_short") }}</p>
                        <p class="horario">{{ __("lang.contact_hours_times_weekend") }}</p>
                    </div>
                </div>
                <!-- // Contact hours -->
            </div>
        </div>
    </div>
</div>
<!-- // Modal Window Contact me -->

<!-- Header -->
<header>
    <!-- Menu Navigation -->
    <div id="top" class="container">
        <!-- Menu left -->
        <nav id="ha-header" class="left-nav ha-header">
            <ul class="nav">
                <li class="dropdown">
                    <!-- Dropdown menu -->
                    <a class="dropdown-toggle circle-main" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <svg class="hello" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </a>
                    <!-- Navigation Sections -->
                    <ul class="dropdown-menu">
                        <li><a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#top" class="menu-item wall">{{ __("lang.chapter_frontpage") }}</a></li>
                        <li><a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#about" class="menu-item wall">{{ __("lang.chapter_about") }}</a></li>
                        <li><a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#skills" class="menu-item wall">{{ __("lang.chapter_skillsCapacities") }}</a></li>
                        <li><a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#education" class="menu-item wall">{{ __("lang.chapter_education") }}</a></li>
                        <li><a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#work" class="menu-item wall">{{ __("lang.chapter_workExperience") }}</a></li>
                        <li><a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#portfolio" class="menu-item wall">{{ __("lang.chapter_portfolio") }}</a></li>
                        <li><a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#download" class="menu-item wall">{{ __("lang.chapter_socialNetworks") }}</a></li>
                        <li><a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#contact" class="menu-item wall">{{ __("lang.chapter_contact") }}</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- // Menu left -->

        <!-- Menu right - Hidden in small devices -->
        <div class="nav-extra hidden-xs">
            <!-- Button Contact Modal -->
            <a class="callme" href="#" data-toggle="modal" data-target="#callmeModal">
                <span class="glyphicon glyphicon glyphicon-earphone call" aria-hidden="true"></span>
            </a>
            <!-- Button 'Hire me' -->
            <a class="hireme button-mywall" data-scroll data-options='{ "easing": "easeOutQuint" }' href="#contacto">{{ __("lang.chapter_contact") }}</a>
        </div>
        <!-- // Menu right -->
    </div>
    <!-- // Menu Navigation -->

    <!-- Personal Details -->
    <div class="container">
        <img class="img-circle imgsus" alt="Leander Molegraaf" src="img/profile.png"/>
        <h1 class="name-boss">Leander Molegraaf</h1>
        <h2 class="main-details">{{ __("lang.frontpage_details") }}</h2>
        <p class="extend-details"> <div class="my-red"><b> Work in Progress </b></div> <!-- room for a short description @todo --></p>
    </div>
    <!-- // Personal Details -->
</header>
<!-- // Header -->

<!-- About Me Intro - Text Type - Hi. I'm ... -->
<section id="about" class="cd-intro">

</section>
<!-- // About Me Intro -->

<!-- About Me Context -->
<section class="full-section my-about">
    <!-- Top About me -->
    <article class="container">
        <div class="row">
            <!-- Text about me -->
            <div class="col-md-8">
                <h2 class="title-main">{{ __("lang.chapter_about") }}</h2>
                <p>
                <p class="text-main">{{ __("lang.about_desc_p1") }}</p>
                <p class="text-main">{!! __("lang.about_desc_p2") !!}</p>
                <p class="text-main">{{ __("lang.about_desc_p3") }}</p>
                <p class="text-main">{{ __("lang.about_desc_p4") }}</p>

                </p>
            </div>
            <!-- Image right about me -->
            <div class="col-md-4">
                <br/><br />
                <img class="img-responsive" src="img/pexels-work.jpg" alt="working">
                <br /><br /><br/>
                <img class="img-responsive" src="img/teamwork.png" alt="working">
            </div>
        </div>
    </article>
    <!-- // Top About me -->

    <!-- 3 Columns extra info -->
    <article class="full-section my-extrame">
        <div class="container">
            <div class="row">
                <!-- Col 1 -->
                <div class="col-sm-4">
                    <div class="row">
                        <!-- @TODO hardcoded width/height -->
                        <div class="col-md-4 img-myextra"><img alt="camera" class="img-myextrame" src="img/computer2.svg"></div>
                        <div class="col-md-8">
                            <h5 class="text-five">{{ __("lang.about_elem1_name") }}</h5>
                            <p class="text-subfive">{{ __("lang.about_elem1_desc") }}</p>
                        </div>
                    </div>
                </div>
                <!-- Col 2 -->
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-md-4 img-myextra"><img alt="quality" class="img-myextrame" src="img/w_quality.png"></div>
                        <div class="col-md-8">
                            <h5 class="text-five">{{ __("lang.about_elem2_name") }}</h5>
                            <p class="text-subfive">{{ __("lang.about_elem2_desc") }}</p>
                        </div>
                    </div>
                </div>
                <!-- Col 3 -->
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-md-4 img-myextra"><img alt="heavyMetal" class="img-myextrame" src="img/heavy-metal-icon2.png"></div>
                        <div class="col-md-8">
                            <h5 class="text-five">{{ __("lang.about_elem3_name") }}</h5>
                            <p class="text-subfive">{{ __("lang.about_elem3_desc") }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- // 3 Columns extra info -->
</section>
<!-- // About Me Context -->

<!-- About Me Gallery -->
<section id="aboutme" class="full-section ha-waypoint" data-animate-down="ha-header-subshow" data-animate-up="ha-header-show">
    <!-- Owl Carousel images -->
    <div class="owl-carousel">
        <div class="item"><img alt="pexels-1" src="img/teamwork.png"/></div>
        <div class="item"><img alt="pexels-2" src="img/pexels/pexels-2.jpg"/></div>
        <div class="item"><img alt="pexels-3" src="img/pexels/pexels-3.jpg"/></div>
        <div class="item"><img alt="pexels-4" src="img/pexels/pexels-4.jpg"/></div>
        <div class="item"><img alt="pexels-5" src="img/pexels/pexels-5.jpg"/></div>
        <div class="item"><img alt="pexels-6" src="img/pexels/pexels-6.jpg"/></div>
    </div>
    <!-- // Owl Carousel images -->

    <!-- More about me and 3 columns -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-three">{{ __("lang.about_more_desc") }}</h3>
                <p class="text-three">{{ __("lang.about_more_desc_2") }}</p>
            </div>
            <!-- Column 1 -->
            <div class="col-md-4">
                <img class="img-rd" alt="leren" src="img/book-solid.png"/>
                <h3 class="title-rd">{{ __("lang.about_more_elem1_name") }}</h3>
                <p class="text-rd">{{ __("lang.about_more_elem1_desc") }}</p>
            </div>
            <!-- Column 2 -->
            <div class="col-md-4">
                <img class="img-rd" alt="doordenken" src="img/brain.png"/>
                <h3 class="title-rd">{{ __("lang.about_more_elem2_name") }}</h3>
                <p class="text-rd">{{ __("lang.about_more_elem2_desc") }}</p>
            </div>
            <!-- Column 3 -->
            <div class="col-md-4">
                <img class="img-rd" alt="vooruitgang" src="img/rocket.png"/>
                <h3 class="title-rd">{{ __("lang.about_more_elem3_name") }}</h3>
                <p class="text-rd">{{ __("lang.about_more_elem3_desc") }}</p>
            </div>
        </div>
    </div>
</section>
<!-- // About Me Gallery -->

<!-- Skills and abilities -->
<section id="skills" class="full-section-two bg-skills">
    <div class="container">
        <!-- Text Skills and Abilities -->
        <h2 class="title-main mywhite">{{ __("lang.chapter_skillsCapacities") }}</h2>
        <p class="text-main mywhite"><i>"Skill is the unified force of experience, intellect and passion in their operation"</i> (John Ruskin, n.d.). </i><br/><br/>{{ __("lang.skills_desc") }}</p>

        <div class="row">
            <!-- Skills percent 1 -->
            <div class="col-md-6 separ">
                <div class="row">
                    <div class="hidden-xs col-sm-2 icon-skill"><img class="img-skill" alt="html 5" src="img/html5.png"/></div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-12 title-skill">PHP</div>
                            <div class="col-sm-12 bar-skill">
                                <div class="this-skill my-purple my-houndred"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skills percent 2 -->
            <div class="col-md-6 separ">
                <div class="row">
                    <div class="hidden-xs col-sm-2 icon-skill"><img class="img-skill" alt="css 3" src="img/css3.png"/></div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-12 title-skill">JS/TS</div>
                            <div class="col-sm-12 bar-skill">
                                <div class="this-skill my-blue my-seventy"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skills percent 3 -->
            <div class="col-md-6 separ">
                <div class="row">
                    <div class="hidden-xs col-sm-2 icon-skill"><img class="img-skill" alt="responsive" src="img/responsive.png"/></div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-12 title-skill">Laravel</div>
                            <div class="col-sm-12 bar-skill">
                                <div class="this-skill my-green my-eighty"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skills percent 4 -->
            <div class="col-md-6 separ">
                <div class="row">
                    <div class="hidden-xs col-sm-2 icon-skill"><img class="img-skill" alt="JavaScript" src="img/js.png"/></div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-12 title-skill">Devops</div>
                            <div class="col-sm-12 bar-skill">
                                <div class="this-skill my-green my-eighty"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- skills section -->
            <div class="col-md-6 separ">
                <div class="cont-ab">
                    <h4 class="title-four color-a">{{ __("lang.skills_software") }}</h4>
                    <!-- Software Abilitie 1 -->
                    <div class="row">
                        <div class="col-xs-2"><img class="img-soft" alt="PhpStorm" src="img/phpStorm.png"/></div>
                        <div class="col-xs-5 ability">PhpStorm</div>
                        <div class="col-xs-5 advanced">{{ __("lang.skills_advanced") }}</div>
                    </div>
                    <!-- Software Abilitie 2 -->
                    <div class="row">
                        <div class="col-xs-2"><img class="img-soft" alt="Word" src="img/offi.png"/></div>
                        <div class="col-xs-5 ability">Word</div>
                        <div class="col-xs-5 expert">{{ __("lang.skills_expert") }}</div>
                    </div>
                    <!-- Software Abilitie 3 -->
                    <div class="row">
                        <div class="col-xs-2"><img class="img-soft" alt="Lucidcharts" src="img/lucidchart.png"/></div>
                        <div class="col-xs-5 ability">Lucidcharts</div>
                        <div class="col-xs-5 expert">{{ __("lang.skills_expert") }}</div>
                    </div>
                    <!-- Software Abilitie 4 -->
                    <div class="row">
                        <div class="col-xs-2"><img class="img-soft" alt="GnuLinux" src="img/linux.png"/></div>
                        <div class="col-xs-5 ability">GNU/Linux</div>
                        <div class="col-xs-5 advanced">{{ __("lang.skills_advanced") }}</div>
                    </div>
                </div>
            </div>
            <!-- Skills percent 5 -->
            <div class="col-md-6 separ">
                <div class="row">
                    <div class="col-sm-2 hidden-xs icon-skill"><img class="img-skill" alt="PHP" src="img/php.png"/></div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-12 title-skill">Databases</div>
                            <div class="col-sm-12 bar-skill">
                                <div class="this-skill my-blue my-seventy"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skills percent 6 -->
        {{--<div class="col-md-6 separ">
            <div class="row">
                <div class="hidden-xs col-sm-2 icon-skill"><img class="img-skill" alt="Wordpress" src="img/wp.png"/></div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-12 title-skill">Wordpress Development</div>
                        <div class="col-sm-12 bar-skill">
                            <div class="this-skill my-blue my-seventy"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <!-- // Skills percent -->
        </div>
    </div>

    <!-- Abilities -->
    <div class="container cont-mg">
        <div class="row">

            <!-- Col 1 - Software Skills -->
            <!-- moved up the previous row

            <!-- Col 2 - Awesome Services -->
            {{--<div class="col-md-4">
                <div class="cont-ab">
                    <h4 class="title-four color-b">Awesome Services</h4>
                    <!-- Awesome Abilities -->
                    <div class="row">
                        <div class="col-md-12 text-awsm">Wordpress Development</div>
                        <div class="col-md-12 text-awsm">Think of Things To Do</div>
                        <div class="col-md-12 text-awsm">Web Design &#38; Development</div>
                        <div class="col-md-12 text-awsm">Create Magical Things</div>
                    </div>
                    <!-- // Awesome Abilities -->
                </div>
            </div>

            <!-- Col 3 - Other Interests -->
            <div class="col-md-4">
                <div class="cont-ab">
                    <h4 class="title-four color-c">Other Interests</h4>
                    <div class="row">
                        <!-- Interest 1 -->
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-12 intrst">
                                    <img alt="Running" src="img/Running-icon.png">
                                </div>
                            </div>
                            <p class="text-interest">Running</p>
                        </div>
                        <!-- Interest 2 -->
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-12 intrst">
                                    <img alt="Taekwondo" src="img/Taekwondo-icon.png">
                                </div>
                            </div>
                            <p class="text-interest">Taekwondo</p>
                        </div>
                        <!-- Interest 3 -->
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-12 intrst">
                                    <img alt="Swimming" src="img/Swimming-icon.png">
                                </div>
                            </div>
                            <p class="text-interest">Swimming</p>
                        </div>
                        <!-- Interest 4 -->
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-12 intrst">
                                    <img alt="Tenis" src="img/Tenis-icon.png">
                                </div>
                            </div>
                            <p class="text-interest">Tenis</p>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
    <!-- // Abilities -->
</section>
<!-- // Skills and abilities -->

<!-- Education -->
<section id="education" class="full-section">
    <!-- Text Education -->
    <div class="container">
        <h2 class="title-main">{{ __("lang.chapter_education") }}</h2>
        <p class="text-main">{{ __("lang.edu_desc") }}</p>
    </div>

    <!-- Timeline Responsive -->
    <article id="cd-timeline" class="cd-container">
        <!-- 1 Item -->
        <div class="cd-timeline-block">
            <!-- Circle image 64x64 -->
            <div class="cd-timeline-img my-green">
                <img src="img/ed1.png" alt="Engineering">
            </div>
            <!-- Info 1 Education -->
            <div class="cd-timeline-content">
                <h2>{{ __("lang.edu_hz") }}</h2>
                <h3>HOGESCHOOL ZEELAND (HZ)</h3>
                <span class="cd-date"> {{ __("lang.month_july") }} 2017</span>
            </div>
        </div>
        <!-- 2 Item -->
    {{--<div class="cd-timeline-block">
        <!-- Circle image 64x64 -->
        <div class="cd-timeline-img my-green">
            <img src="img/ed2.png" alt="Science">
        </div>
        <!-- Info 2 Education -->
        <div class="cd-timeline-content">
            <h2>Computer Science</h2>
            <h3>Massachusetts Institute of Technology</h3>
            <span class="cd-date">2014 September</span>
        </div>
    </div>--}}
    <!-- 3 Item -->
        <div class="cd-timeline-block">
            <!-- Circle image 64x64 -->
            <div class="cd-timeline-img my-green">
                <img src="img/ed3.png" alt="Bachelor">
            </div>
            <!-- Info 3 Education -->
            <div class="cd-timeline-content">
                <h2>{{ __("lang.edu_scalda") }}</h2>
                <h3>SCALDA Terneuzen</h3>
                <span class="cd-date">{{ __("lang.month_june") }} 2013</span>
            </div>
        </div>
        <!-- The Beginning of Times image -->
        <div class="cd-timeline-block">
            <!-- Circle image 64x64 -->
            <div class="cd-timeline-img my-green">
                <img src="img/ed4.png" alt="Times">
            </div>
        </div>
    </article>
    <!-- The Beginning of Times item -->
    <p class="txt-times">{{ __("lang.edu_beginning") }}</p>
</section>
<!-- // Education -->

<!-- Work Experience -->
<section id="work" class="full-section-two bg-work">
    <!-- Text Work Experience -->
    <div class="container">
        <h2 class="title-main mywhite">{{ __("lang.chapter_workExperience") }}</h2>
        <p class="text-main mywhite">{{ __("lang.we_desc") }}</p>
    </div>
    <!-- Work -->
    <div class="container cont-mg">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#1" role="tab" data-toggle="tab">Nedbase</a></li>
            <li role="presentation"><a href="#2" role="tab" data-toggle="tab">Maxxton</a></li>
            <li role="presentation"><a href="#3" role="tab" data-toggle="tab">HZ Lectoraat</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Tab 1 -->
            <div role="tabpanel" class="tab-pane fade active in" id="1">
                <h3 class="title-wk">{{ __("lang.we_elem1_title") }}</h3>
                <p class="wk-company">Nedbase B.V.</p>
                <p class="text-wk">{!! __("lang.we_elem1_desc") !!}</p>
                <p class="wk-date">2017</p>
            </div>
            <!-- Tab 2 -->
            <div role="tabpanel" class="tab-pane fade" id="2">
                <h3 class="title-wk">{{ __("lang.we_elem2_title") }}</h3>
                <p class="wk-company">Maxxton B.V.</p>
                <p class="text-wk">{!! __("lang.we_elem2_desc") !!}</p>
                <p class="wk-date">2015</p>
            </div>
            <!-- Tab 3 -->
            <div role="tabpanel" class="tab-pane fade" id="3">
                <h3 class="title-wk">{{ __("lang.we_elem1_title") }}</h3>
                <p class="wk-company">HZ lectoraat</p>
                <p class="text-wk">{!! __("lang.we_elem3_desc") !!}</p>
                <p class="wk-date">2016</p>
            </div>
        </div>
        <!-- // Tab panes -->
    </div>
    <!-- // Work -->
</section>
<!-- // Work Experience -->

<!-- Portfolio -->
<section id="portfolio" class="full-section">
    <!-- Text Portfolio -->
    <div class="container">
        <h2 class="title-main">{{ __("lang.chapter_portfolio") }}</h2>
        <p class="text-main">{{ __("lang.port_desc") }}</p>
    </div>

    <!-- Gallery -->
    <div class="container">
        <ul class="row wall-portfolio">
            <li class="col-md-4 doblock"><a href="img/item-1.png" data-imagelightbox="b"><img class="wall-gallery" src="img/item-1.png" alt="my item 1" /></a></li>
            <li class="col-md-4 doblock"><a href="img/item-2.png" data-imagelightbox="b"><img class="wall-gallery" src="img/item-2.png" alt="my item 2" /></a></li>
            <li class="col-md-4 doblock"><a href="img/item-3.png" data-imagelightbox="b"><img class="wall-gallery" src="img/item-3.png" alt="my item 3" /></a></li>
            <li class="col-md-4 doblock"><a href="img/item-4.png" data-imagelightbox="b"><img class="wall-gallery" src="img/item-4.png" alt="my item 4" /></a></li>
            <li class="col-md-4 doblock"><a href="img/item-5.png" data-imagelightbox="b"><img class="wall-gallery" src="img/item-5.png" alt="my item 5" /></a></li>
            <li class="col-md-4 doblock"><a href="img/item-6.png" data-imagelightbox="b"><img class="wall-gallery" src="img/item-6.png" alt="my item 6" /></a></li>
        </ul>
    </div>
    <!-- // Gallery -->
</section>
<!-- // Portfolio -->

<!-- Social and Download -->
<section id="download" class="full-download">
    <div class="container">
        <div class="row">
            <!-- Social Networks -->
            <div class="col-sm-12 btn-class col-md-7">
                <a href="https://www.linkedin.com/in/leander-molegraaf-81373b21" class="social-ink">
                    <img class="socl" src="img/linkedin-icon.png" alt="linkedin"/>
                </a>
            </div>
            <!-- Download Resume - CV -->
            <div class="col-sm-5 btn-class hidden-sm hidden-xs">
                <a class="btn-dwnld" href="download/CV.pdf">{{ __("lang.port_download") }}</a>
            </div>
        </div>
    </div>
</section>
<!-- // Social and Download -->

<!-- Contact me -->
<section id="contact" class="full-section-three bg-contact">
    <div class="container">
        <!-- Title Contact me -->
        <h1 class="title-ct">{{ __("lang.chapter_contact") }}</h1>
        <p class="separator-ct"></p>
        <!-- Localization -->
        <div class="row">
            <div class="col-md-6 col-xs-12 txt-center">
                <p class="icon-ct glyphicon glyphicon-map-marker"></p>
                <p class="text-ct">{{ __("lang.contact_location") }} <b>{{ __("lang.contact_location_city") }}</b></p>
            </div>
            <!--Mail -->
            <div class="col-md-6 col-xs-12 txt-center">
                <p class="icon-ct glyphicon glyphicon-send"></p>
                <p class="text-ct">{{ __("lang.contact_email_and_phone_1") }} <b>leandermolegraaf@gmail.com</b> {{ __("lang.contact_email_and_phone_2") }} +31 06 18108714</p>
            </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

    </div>

</section>
<!-- // Contact me -->

<!-- Footer -->
<footer class="full-footer">
    <div class="container padding-footer">
        <div class="row">
            <!-- Text Left -->
            <div class="col-sm-8 foo-left">{!! __("lang.footer_message_1") !!}</div>
            <!-- Text Right -->
            <audio src="audio/register.mp3" type="audio/mpeg" id="audio"></audio>
            <div class="col-sm-4 foo-right"><span id="hiddenSoundPlayer" class="glyphicon glyphicon-bitcoin" aria-hidden="true"> {{ __("lang.footer_message_2") }}</span></div>
        </div>
    </div>
</footer>
<!-- // Footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Smooth-scroll -->
<script src="js/smooth-scroll.min.js"></script>
<!-- "Hi. I'am..." Text type - Resource jQuery -->
<script src="js/main.min.js"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<!-- Menu Scrolling -->
<script src="js/waypoints.min.js"></script>
<!-- Portfolio gallery -->
<script src="js/imagelightbox.min.js"></script>
<!-- play sound -->
<script src="js/playsound.js"></script>
</body>
</html>