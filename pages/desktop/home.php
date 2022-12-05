<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400&family=Inconsolata:wght@300;400&family=Jost:wght@300;400;500&family=Quicksand:wght@300;400;500&family=Roboto+Mono:wght@300;400&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/splide.css">
    <link rel="stylesheet" href="./css/index_extra.css">
    <link rel="stylesheet" href="./css/windex.css">
    <!-- <link rel="stylesheet" href="./css/mobile.css"> -->
    <!-- <link rel="stylesheet" href="./css/responsive.css">  -->
    <!-- JS -->
    <script src="./js/gsap.js" defer></script>
    <script src="./js/gsap-drag.js" defer></script>
    <script src="./js/gsap-scroll.js" defer></script>
    <script src="./js/splide.js" defer></script>
    <script src="./js/tilt.js" defer></script>
    <script src="./js/windex.js" defer></script>
</head>

<body>
    <!-- <div id="popUPBG">
        <div id="pContent">
            <svg id="cut" onclick="popUP1(0)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
            <div id="popHead">
                <img src="./assests/temp1.jpg" alt="">
            </div>
            <div id="pBody">
                <p>Come and Become A Member</p>
                <button>Register</button>
            </div>
        </div>
    </div> -->
    <div id="bcGrad1"></div>
    <div id="bcGrad2"></div>
    <div id="bcGrad3"></div>
    <div id="bcGrad4"></div>
    <div id="bcGrad5"></div>
    <div id="blurBG"></div>
    <header class="desktop-header">
        <div id="navLinks">
            <div id="navMarker"></div>
            <a href="#page1" data-name="HOME">HOME</a>
            <a href="#page2" data-name="ABOUT">ABOUT</a>
            <a href="#page3" data-name="EVENTS">EVENTS</a>
            <a href="#page4" data-name="TEAM">TEAM</a>
            <a href="/contact.php" data-name="CONTACT">CONTACT</a>
        </div>
        <span data-tilt data-tilt-reverse="true">
            <a href="/register.php">REGISTER</a>
        </span>
    </header>
    <!-- <header class="mobile-header">
        <div id="mhLinks">
            <a href="#page1" data-name="HOME">HOME</a>
            <a href="#page2" data-name="ABOUT">ABOUT</a>
            <a href="#page3" data-name="EVENTS">EVENTS</a>
            <a href="#page4" data-name="TEAM">TEAM</a>
            <a href="#page5" data-name="CONTACT">CONTACT</a>
        </div>
        <div id="mhSVG" data-open="false">
            <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                <path class="line middle" d="m 30,50 h 40" />
                <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
            </svg>
        </div>
    </header> -->
    <!-- <section id="pages"> -->
    <section id="page1">
        <div id="homeTxt">
            <div class="l1" id="homeTxtHead" data-animated="true" style="display: flex;column-gap: 1rem;">
                <h1>Cyber</h1>
                <h1>Sentinels</h1>
            </div>
            <div class="l1">
                <p data-animated="true">We search the <span>TRUTH</span> in<br> 1 n 0s</p>
            </div>
        </div>
        <div id="homeImg">
            <div id="homeImg__content">
                <div class="r1">
                    <div id="cyberImg"></div>
                </div>
                <svg class="r1" data-animated="true" id="pedestal" width="301" height="148" viewBox="0 0 301 148"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse class="moveUp4" cx="150.5" cy="126" rx="150.5" ry="22" fill="#0B0708" />
                    <ellipse class="moveUp3" cx="151.042" cy="118.714" rx="142.793" ry="22.1429" fill="#0B0708"
                        stroke="#0028EC" stroke-width="1.4" stroke-miterlimit="1.44008" stroke-dasharray="27 14" />
                    <ellipse class="moveUp2" cx="148.483" cy="110.143" rx="131.022" ry="22.1429" fill="white" />
                    <g id="lightC">
                        <path id="light"
                            d="M29.7293 99.881L0 0C149.844 1.49122 305.667 0.178787 299.842 0C299.842 0 267.08 103.996 267.08 99.881"
                            fill="url(#paint0_linear_2_9)" />
                    </g>
                    <ellipse class="moveUp1" cx="148.483" cy="100.143" rx="118.738" ry="22.1429"
                        fill="url(#paint1_linear_2_9)" />
                    <defs>
                        <linearGradient id="paint0_linear_2_9" x1="150" y1="77" x2="150" y2="-3.03964e-06"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D8D8D8" />
                            <stop offset="1" stop-color="#D8D8D8" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_2_9" x1="148.483" y1="122" x2="148.483" y2="77.9997"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#0028EC" />
                            <stop offset="1" stop-color="#000F58" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </section>
    <section id="page2">
        <div id="aboutImg">
            <span></span>
            <span></span>
            <img data-reverse="false" src="./assests/index.jpg" alt="">
            <span></span>
            <span></span>
        </div>
        <div id="aboutTxt">
            <p id="move-1">Welcome</p>
            <p id="move-2">We are CYBER SENTINEL, Guardians of the Cyber world, a community entirely dedicated to cyber
                security.UPES-CYBER SENTINEL came into existence on 28th January 2020, on the occasion of International
                Data Privacy Day. UPES Cyber Sentinel is a technical student chapter at the University of Petroleum and
                Energy Studies, Dehradun. With a vision to facilitate students in their Cyber Security endeavors through
                extracurricular activities, mentoring and adhering to the Cyber Security Trends, and making them cyber
                aware. We conduct CTFs, Workshops, Talks, Challenges, Solutions, and guidance as a team of cyber
                security enthusiasts. We hanker from raising a guild of terrific cyber maniacs to make the common public
                aware of the primary axioms of security. A crew of the next generation attackers and defenders bent on
                building up the toughest armors in cyber warfare.</p>
        </div>
    </section>



    <!-- NEW SPLIDE -->
    <div id="page3">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        A 36 hours long CTF event conducted by Cyber Sentinel including brain racking challenges
                                        across a wide range of categories and 36 hours to tackle them all.
                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/Deathbell CTF.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        A simulation game prepared through interactive python shell with a motive to rescue the
                                        dragon by bypassing the rex required to unlock the gate guarded by demons.
                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/Imagine_dragon CMYK.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        A two day CTF event exclusively for Girls to brush up their hacking skills.Conducted by
                                        MissinCyber a platform which promotes girls to explore more about their geek and techie
                                        side without being intimidated.
                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/QUARANTINO cmyk.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        Cyber Sentinel organized a event during Cyber Security Awareness Month in 2020 with
                                        special guest Mr. Mohammad Arif Ali Khan, Ethical Hacker, CID Hyderabad who shared his
                                        views on why tor is more secure for browsing.
                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/Mohmmad Arif_talk.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        "The more you live with the bugs, the more vulnerable you become."An event where Cyber Sentinel brought the learning opportunity of hunting bugs, the event was chaired byCobalt Core Pentester Synack Red Teamer Security Analyst - Detox Technologiesat Detox Technologies, Mr. Harsh Bothra.Main Aim of this event was to provide necessary information about BugHunting.
                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/bug hunting.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        "Flag of Conquest Hack your way through the challenge_"Cyber Sentinel Brought this oppurtunity for those who wanna sharpen their Cyber Security skills.This event was conducted to perfectionate a person's Cyber Security skills practically.A CTF intended to build up the very  first steps in the path of security

                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/CTF.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        1
                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/poster22.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        "There Is Nothing More Deceptive Than An Obvious Fact"<br>The Scavenger Hunt or Investigation Hunt was an event , full of exciting rounds of mysteries. This event was completely based on detective and investigative skills.

                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/Scavenger.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <div class="slide__content">
                                <div class="boundry">
                                    <div class="face bckFace">
                                        It was a workshop for the students who are interested in HACK THE BOX challenges.In this workshop we taught students regarding the different-different technique andchallenges.There was a small quiz round also for checking the efficiency of participants.
                                    </div>
                                    <div class="face fwdFace">
                                        <img src="./assests/events/TestTemp_.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- NEW SPLIDE -->

    <section id="page4">
        <div class="title1">
            <h1>Meet Our Team</h1>
            <div id="gyan">
                <div id="hashTags">
                    <tt></tt>
                    <span>|</span>
                </div>
                <p>
                    blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
                    blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
                    blah blah blah blah blah blah blah blah blah blah
                </p>
            </div>
        </div>
        <div id="people">
            <div class="cardContainer hid1">
                <div class="card">
                    <img class="bImg" src="./assests/person1.jpg" alt="">
                    <div class="cardBody">
                        <div class="cardCircle"></div>
                        <div class="cardInfo">
                            <div class="links">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 382 382"
                                    style="enable-background:new 0 0 382 382;" xml:space="preserve">
                                    <path style="fill:#0077B7;"
                                        d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889  C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056  H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806  c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1  s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73  c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079  c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426  c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472  L341.91,330.654L341.91,330.654z" />
                                </svg>
                                <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 0.396c-8.839 0-16 7.167-16 16 0 7.073 4.584 13.068 10.937 15.183 0.803 0.151 1.093-0.344 1.093-0.772 0-0.38-0.009-1.385-0.015-2.719-4.453 0.964-5.391-2.151-5.391-2.151-0.729-1.844-1.781-2.339-1.781-2.339-1.448-0.989 0.115-0.968 0.115-0.968 1.604 0.109 2.448 1.645 2.448 1.645 1.427 2.448 3.744 1.74 4.661 1.328 0.14-1.031 0.557-1.74 1.011-2.135-3.552-0.401-7.287-1.776-7.287-7.907 0-1.751 0.62-3.177 1.645-4.297-0.177-0.401-0.719-2.031 0.141-4.235 0 0 1.339-0.427 4.4 1.641 1.281-0.355 2.641-0.532 4-0.541 1.36 0.009 2.719 0.187 4 0.541 3.043-2.068 4.381-1.641 4.381-1.641 0.859 2.204 0.317 3.833 0.161 4.235 1.015 1.12 1.635 2.547 1.635 4.297 0 6.145-3.74 7.5-7.296 7.891 0.556 0.479 1.077 1.464 1.077 2.959 0 2.14-0.020 3.864-0.020 4.385 0 0.416 0.28 0.916 1.104 0.755 6.4-2.093 10.979-8.093 10.979-15.156 0-8.833-7.161-16-16-16z" />
                                </svg>
                            </div>
                        </div>
                        <img class="fImg" src="./assests/person1.jpg" alt="">
                    </div>
                </div>
                <div class="cname">
                    <p>Name</p>
                    <p>Vice Presedent</p>
                </div>
            </div>
            <div class="cardContainer hid1">
                <div class="card">
                    <img class="bImg" src="./assests/person1.jpg" alt="">
                    <div class="cardBody">
                        <div class="cardCircle"></div>
                        <div class="cardInfo">
                            <div class="links">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 382 382"
                                    style="enable-background:new 0 0 382 382;" xml:space="preserve">
                                    <path style="fill:#0077B7;"
                                        d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889  C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056  H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806  c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1  s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73  c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079  c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426  c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472  L341.91,330.654L341.91,330.654z" />
                                </svg>
                                <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 0.396c-8.839 0-16 7.167-16 16 0 7.073 4.584 13.068 10.937 15.183 0.803 0.151 1.093-0.344 1.093-0.772 0-0.38-0.009-1.385-0.015-2.719-4.453 0.964-5.391-2.151-5.391-2.151-0.729-1.844-1.781-2.339-1.781-2.339-1.448-0.989 0.115-0.968 0.115-0.968 1.604 0.109 2.448 1.645 2.448 1.645 1.427 2.448 3.744 1.74 4.661 1.328 0.14-1.031 0.557-1.74 1.011-2.135-3.552-0.401-7.287-1.776-7.287-7.907 0-1.751 0.62-3.177 1.645-4.297-0.177-0.401-0.719-2.031 0.141-4.235 0 0 1.339-0.427 4.4 1.641 1.281-0.355 2.641-0.532 4-0.541 1.36 0.009 2.719 0.187 4 0.541 3.043-2.068 4.381-1.641 4.381-1.641 0.859 2.204 0.317 3.833 0.161 4.235 1.015 1.12 1.635 2.547 1.635 4.297 0 6.145-3.74 7.5-7.296 7.891 0.556 0.479 1.077 1.464 1.077 2.959 0 2.14-0.020 3.864-0.020 4.385 0 0.416 0.28 0.916 1.104 0.755 6.4-2.093 10.979-8.093 10.979-15.156 0-8.833-7.161-16-16-16z" />
                                </svg>
                            </div>
                        </div>
                        <img class="fImg" src="./assests/person1.jpg" alt="">
                    </div>
                </div>
                <div class="cname">
                    <p>Name</p>
                    <p>Vice Presedent</p>
                </div>
            </div>
        </div>
        <div onclick="teamsClick.click()" class="button1 hid1" data-tilt data-tilt-reverse="true" data-tilt-max="25"
            id="knowMore">
            <p>Know More</p>
            <a id="teamsClick" href="/teams.php" style="display:none ;"></a>
        </div>
    </section>
    <footer>
        <div id="foot1">
            <div id="logo">
                <a href="./home">
                    <img src="./assests/cyberS.png" alt="">
                </a>
            </div>
            <div id="links">
                <a href="#">Home</a>
                <a href="/register.php">Register</a>
                <a href="/contact.php">Contact Us</a>
                <a href="/teams.php">Teams</a>
            </div>
        </div>
        <div id="foot2">
            <div id="footSVG">
                <!-- FACEBOOk -->
                <a href="https://www.facebook.com/UPESCyberSentinel/">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 29.94 29.94" style="enable-background:new 0 0 29.94 29.94;"
                        xml:space="preserve">
                        <g>
                            <path
                                d="M27.56,0.684H2.383C1.065,0.684,0,1.748,0,3.064v23.813c0,1.312,1.065,2.379,2.383,2.379H27.56   c1.312,0,2.38-1.066,2.38-2.379V3.064C29.939,1.748,28.871,0.684,27.56,0.684z M20.125,9.167c-0.619-0.362-1.11-0.648-1.727-0.648   c-0.604,0-1.12,0.151-1.384,0.405c-0.264,0.252-0.395,0.74-0.395,1.461v1.067h3.229l-0.699,2.968h-2.53v9.862h-4.056V14.42H10.67   v-2.968h1.895v-1.133c0-1.193,0.143-1.907,0.425-2.496c0.281-0.587,0.826-1.241,1.584-1.611c0.757-0.369,1.877-0.555,3.036-0.555   c1.188,0,2.116,0.396,3.254,0.715L20.125,9.167z" />
                            <g>
                    </svg>
                </a>

                <!-- INSTAGRAM -->
                <a href="https://www.instagram.com/cybersentinelupes/?hl=en">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>


                <!-- twitter -->
                <a href="https://twitter.com/cyber_sentinel_?lang=en">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                </a>

                <!-- linked in -->
                <a href="https://www.linkedin.com/mwlite/company/cyber-sentinel-upes">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
            </div>
            <div id="footTxt">
                <p>© 2022 Copyright All Right Reserved</p>
            </div>
        </div>
    </footer>
    <!-- </section>  -->

</body>
<!-- <script src="./js/jquery.js"></script> -->

</html>