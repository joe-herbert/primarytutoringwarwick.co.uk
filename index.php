<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="icon" type="image/svg+xml" href="/assets/favicon/favicon.svg">
        <link rel="icon" type="image/png" href="/assets/favicon/favicon.png">
        <link rel="canonical" href="https://primarytutoringwarwick.co.uk" />
        <title>Primary Curriculum and 11+ Tutoring, in Warwick and Online - Primary Tutoring Warwick</title>
        <meta charset="utf-8">
        <meta name="description" content="Tutoring in Maths, English, Science and/or the 11+ for pupils aged 4-11 by a qualified teacher with over sixteen years' experience.">
        <meta name="keywords" content="Tutoring, 11+, Primary, Warwick">
        <meta name="author" content="Pauline Bibb">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="follow,index">
        <meta property="og:title" content="Primary Tutoring Warwick">
        <meta property="og:site_name" content="Primary Tutoring Warwick">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://primarytutoringwarwick.co.uk/">
        <meta property="og:image" content="https://primarytutoringwarwick.co.uk/assets/images/ptwLogo.png">
        <meta property="og:image:alt" content="Primary Tutoring Warwick Logo">
        <meta property="og:description" content="Tutoring in Maths, English, Science and/or the 11+ for pupils aged 4-11 by a qualified teacher with over sixteen years' experience.">
        <meta property="og:locale" content="en_GB">
        <script type="application/ld+json">
        {
            "@context" : "https://schema.org",
            "@type" : "WebSite",
            "name" : "Primary Tutoring Warwick",
            "alternateName": "PTW",
            "url" : "https://primarytutoringwarwick.co.uk/"
        }
        </script>
    </head>
    <body>
        <?php
        $firstTitle = "What I Do";
        $secondTitle = "Who I Am";
        $thirdTitle = "How It Works";
        $fourthTitle = "Contact";
        $firstId = str_replace(' ', '', $firstTitle);
        $secondId = str_replace(' ', '', $secondTitle);
        $thirdId = str_replace(' ', '', $thirdTitle);
        $fourthId = str_replace(' ', '', $fourthTitle);
        ?>
        <div id="hamburger">
            <a id="hamburger-toggle" class="main-nav-toggle" href="#main-nav"><i>Menu</i></a>
        </div>
        <div id="kidsMode" class="hide">
            <label class="switch">
                <input type="checkbox" onchange="document.querySelector('body').classList.toggle('fun');">
                <span class="switcher"></span>
            </label>
            <span>Kids mode</span>
        </div>
        <nav id="nav">
            <div id="menu">
                <ul>
                    <li><a href="#<?php echo $firstId?>"><?php echo $firstTitle?></a></li>
                    <li><a href="#<?php echo $secondId?>"><?php echo $secondTitle?></a></li>
                    <li><a href="#<?php echo $thirdId?>"><?php echo $thirdTitle?></a></li>
                    <li><a href="#<?php echo $fourthId?>"><?php echo $fourthTitle?></a></li>
                </ul>
            </div>
        </nav>
        <div class="section" id="nameSection">
            <div id="nameWrapper">
            <!--onclick="document.querySelector('body').classList.toggle('fun')"-->
            <svg 
               viewBox="0 0 80.981461 104.32294"
               version="1.1"
               id="ptwman"
               sodipodi:docname="ptwman.svg"
               inkscape:version="1.3.2 (091e20ef0f, 2023-11-25, custom)"
               xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
               xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
               xmlns="http://www.w3.org/2000/svg"
               xmlns:svg="http://www.w3.org/2000/svg">
              <sodipodi:namedview
                 id="namedview1"
                 pagecolor="#ffffff"
                 bordercolor="#000000"
                 borderopacity="0.25"
                 inkscape:showpageshadow="2"
                 inkscape:pageopacity="0.0"
                 inkscape:pagecheckerboard="0"
                 inkscape:deskcolor="#d1d1d1"
                 inkscape:document-units="mm"
                 inkscape:zoom="1.1639162"
                 inkscape:cx="111.26231"
                 inkscape:cy="268.9197"
                 inkscape:window-width="1898"
                 inkscape:window-height="1178"
                 inkscape:window-x="10"
                 inkscape:window-y="10"
                 inkscape:window-maximized="1"
                 inkscape:current-layer="layer1" />
              <defs
                 id="defs1" />
              <g
                 inkscape:label="Layer 1"
                 inkscape:groupmode="layer"
                 id="layer1"
                 transform="translate(-64.51,-56.233719)">
                <path
                   id="path5-8"
                   style="fill:none;stroke:#000000;stroke-width:3.11502;stroke-linecap:round;stroke-linejoin:round"
                   d="m 66.06751,111.99922 v 12.81533 c 0,0 8.3082,0.69257 8.31794,-6.35825 0.01,-7.05081 -8.31794,-6.45708 -8.31794,-6.45708 z m 77.86644,-7e-5 v 12.81533 c 0,0 -8.3082,0.69257 -8.31794,-6.35825 -0.01,-7.05081 8.31794,-6.45708 8.31794,-6.45708 z M 139.7103,112.344 V 89.271309 l -30.21005,14.541361 v 55.18341 l 30.21005,-14.6769 v -19.61613 m -30.26543,34.2961 h -4.53726 m 4.53718,-54.99402 h -4.53726 m -4.35234,54.99385 h 4.53726 m -4.53718,-54.99402 h 4.53726 m -34.802834,8.38976 V 89.271139 L 100.49982,103.8125 v 55.18341 l -30.210124,-14.6769 v -19.40279 m 8.922703,-32.001381 c -0.705689,-2.4326 -1.083961,-5.00441 -1.083962,-7.66456 -4e-6,-15.16521 12.293834,-27.45905 27.459053,-27.45905 15.16521,0 27.45904,12.29384 27.45904,27.45905 0,2.30148 -0.28314,4.53684 -0.8165,6.67312 M 95.278474,89.115722 c 5.622256,3.60755 11.830516,4.753373 19.443056,0 m -3.61902,-12.455379 c 2.59841,1.102574 5.19681,1.21808 7.79522,0 m -27.79522,4.25e-4 c 2.598407,1.102574 5.196813,1.21808 7.79522,0" />
                  </g>
                </svg>
                <h1 id="name">Primary Tutoring Warwick</h1>
                <span id="nameNote">For ages 4-11</span>
            </div>
        </div>
        <div class="section" id="<?php echo $firstId?>">
            <h1 class="title"><?php echo $firstTitle?></h1>
            <div id="firstWrapper" data-aos="fade-left">
                <div id="firstText">
                    <p>I’m a Primary tutor helping children gain confidence and skills in Maths, English and/or Science.</p>
                    <p>I gain an understanding of the level each child is working at and what help is needed through talking with the parent and child. I then tailor lessons to build on skills and knowledge and work at the speed and detail dictated by the pupil to develop their understanding and confidence. I find a child is often more relaxed in a one&#8209;to&#8209;one situation than in a classroom and they ask questions about the work being undertaken.</p>
                    <p>I can intercept misconceptions whilst work is being completed and we can work together to correct these, and any errors made. I give immediate feedback about the work completed during the sessions and I encourage hard work, great understanding and pupil engagement through a reward system.</p>
                </div>
                <div id="firstImage">
                    <img id="profileImage" src="/assets/images/profile.jpg" alt="Profile picture of Pauline">
                </div>
            </div>
        </div>
        <div class="section noTopPadding" id="<?php echo $secondId?>">
            <div data-aos="fade-right">
                <h1 class="title"><?php echo $secondTitle?></h1>
                <p>My name is Pauline Bibb and I am a Tutor based in Warwick. I am a qualified Primary School Teacher with over sixteen years of experience teaching across the Primary curriculum. I gained my PGCE from Hull University and have since taught in three different primary schools from Year 1 through to Year 6. I now focus on tutoring 1&#8209;2&#8209;1 and have fourteen years’ experience. I am a mum of four and tutored each of my children to 11+ success; they all secured a place at local grammar schools.</p>
            </div>
        </div>
        <div class="slider">
            <div class="slide-track">
                <button class="slide" id="testimonialClose" onclick="this.closest('.slider').classList.toggle('all'); document.getElementById('testimonialOpen').innerText = 'More testimonials'">Less testimonials</button>
                <h1 class="slide">Testimonials</h1>
                <div class="slide keySlide">
                    <div>
                        <span class="testimonial">I had a very short time frame to learn everything for my 11+ and Pauline was the person to help me! She was always very positive, managing to find the good in all my tests and any areas of weakness were explained to me in a constructive way using helpful resources she found. I really enjoyed our lessons and would recommend Pauline for any child who needs a little additional help because she goes above and beyond!</span>
                        <span class="testimonialAuthor">Year 5 pupil, 11+</span>
                    </div>
                </div>
                <div class="slide keySlide">
                    <div>
                        <span class="testimonial">Pauline was a great tutor, she was always patient and helpful. Pauline worked closely with me to improve my times table skills. With the help of her comprehensive 11+ tutoring I was able to excel in my 11+ exam and get into my chosen grammar school.</span>
                        <span class="testimonialAuthor">Year 4-5 pupil, 11+</span>
                    </div>
                </div>
                <div class="slide keySlide">
                    <div>
                        <span class="testimonial">Pauline really helped me with my non-verbal reasoning for my 11+ exam, a skill I wasn’t confident with until after having her as my tutor, and this meant I could achieve a result I was more than happy with.</span>
                        <span class="testimonialAuthor">Year 4-5 pupil, 11+</span>
                    </div>
                </div>
                <div class="slide keySlide">
                    <div>
                        <span class="testimonial">When Pauline was my tutor I excelled in areas that I had struggled with before. Pauline is very good at helping you get it right by explaining the subject simply using effective methods. I would strongly recommend Pauline for 11+ tutoring. I loved her stickers for positive reinforcement.</span>
                        <span class="testimonialAuthor">Year 4-5 pupil, 11+</span>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <span class="testimonial">Pauline tutored my son for a few years. She really boosted his confidence with his reading and spelling skills. They played fun games to reinforce vocabulary and he really looked forward to his weekly lessons.</span>
                        <span class="testimonialAuthor">Parent of a year 3 pupil, English</span>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <span class="testimonial">My children came on leaps and bounds when Pauline tutored them for maths and English. Their times table skills were much improved and they learned how to answer comprehension questions about a text. They had fun in her lessons.</span>
                        <span class="testimonialAuthor">Parent of two year 5 pupils, Maths and English</span>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <span class="testimonial">Our daughter really struggled with maths so we enlisted the help of Pauline. She worked through areas that our daughter found tricky and her confidence and skills grew. She made learning fun and was very good at praising hard work and success.</span>
                        <span class="testimonialAuthor">Parent of a year 5 pupil, Maths</span>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <span class="testimonial">Pauline home-tutored our son in the primary curriculum for a few months whilst he transitioned from Primary to Secondary school. She was brilliant at bringing out the best in him. He took a real pride in his work and actually enjoyed learning! His presentation skills vastly improved and his confidence in maths sored. He started secondary school a confident, happy boy thanks to their time together.</span>
                        <span class="testimonialAuthor">Parent of a year 6 pupil, Primary curriculum</span>
                    </div>
                </div>
            </div>
            <button id="testimonialOpen" onclick="this.closest('.slider').classList.toggle('all'); if (this.innerText === 'More testimonials') { this.innerText = 'Less testimonials' } else { this.innerText = 'More testimonials' }">More testimonials</button>
        </div>
        <div class="section" id="<?php echo $thirdId?>">
            <div data-aos="fade-left">
                <h1 class="title"><?php echo $thirdTitle?></h1>
                <p>You choose:</p>
                <ul class="styledUl">
                    <li>In person or Online</li>
                    <li>Maths, English and/or Science</li>
                </ul>
                <p>I provide:</p>
                <ul class="styledUl">
                    <li>1&#8209;2&#8209;1 sessions lasting one hour</li>
                    <li>Immediate feedback as I work through tasks with your child</li>
                    <li>Homework questions to consolidate learning, marked during the following session</li>
                    <li>Personalised sessions to maximise the benefit for your child</li>
                </ul>
                <p>For 11+ tuition, we work on:</p>
                <ul class="styledUl">
                    <li>Developing knowledge and strategies to use in the 4 areas tested; Maths, English, Non-Verbal Reasoning and Verbal Reasoning</li>
                    <li>Time management skills and tips for answering Multiple choice questions</li>
                    <li>Consolidation through practicing a variety of Tests</li>
                </ul>
            </div>
        </div>
        <div id="pricesWrapper">
            <div class="section">
                <h1>Lessons and Prices</h1>
                <p>I am available to teach Monday&#8209;Thursday 4&#8209;7pm and can offer lessons during the day for home-schooled students.</p>
                <p>I also offer lessons during school holidays.</p>
                <p>Lessons take place at my home in Chase Meadow, Warwick or I offer online lessons.</p>
                <br>
                <p><i>I charge £42 per hour of tuition.</i></p>
            </div>
        </div>
        <div class="section centerOnLarge noBottomPadding" id="<?php echo $fourthId?>">
            <div data-aos="fade-right">
                <h1 class="title"><?php echo $fourthTitle?></h1>
                <span>If you're interested in finding out more about Primary Tutoring Warwick, or you'd like to book a session with me, please fill in the form below!</span><br>
                <form id="contactForm">
                    <label for="nameInput">Your name:</label><br>
                    <input type="text" name="name" id="nameInput" placeholder="" required><br>
                    <label for="emailInput">Your email (so I can get in touch with you):</label><br>
                    <input type="email" name="email" id="emailInput" placeholder="" required><br>
                    <label for="messageInput">What would you like to say?</label><br>
                    <textarea name="message" id="messageInput" required></textarea><br>
                    <span id="contactFormSuccess" class="hide">Your message was successfully sent! I'll be in touch with you soon.</span>
                    <span id="contactFormError" class="hide">Your message couldn't be sent. Please try again later or email <a href="mailto:pauline@primarytutoringwarwick.co.uk">pauline@primarytutoringwarwick.co.uk</a>.</span>
                    <div id="formSpinner" class="spinner-square hide">
                        <div class="square-1 square"></div>
                        <div class="square-2 square"></div>
                        <div class="square-3 square"></div>
                    </div>
                </form>
            </div>
        </div>
        <button class="g-recaptcha" 
            data-sitekey="6LdQP2EpAAAAADfTjyDwNA5ptSqvr8QIQR-QWJAa" 
            data-callback='onSubmit' 
            data-action='submit' id="btnSubmit">Submit</button>
        <span id="joeHerbertLink">Website by <a href="https://joeherbert.dev" target="_blank"><i class="hover-text-indigo">J</i><i class="hover-text-purple">o</i><i class="hover-text-yellow">e</i>&nbsp;<i class="hover-text-red">H</i><i class="hover-text-light-blue">e</i><i class="hover-text-indigo">r</i><i class="hover-text-purple">b</i><i class="hover-text-yellow">e</i><i class="hover-text-red">r</i><i class="hover-text-light-blue">t</i></a></span>
        <!--<div id="colorPickerWrapper" class="hide">
            <input type="radio" id="b2cdf3" name="color" value="b2cdf3" checked><label for="b2cdf3">#b2cdf3</label>
            <input type="radio" id="d9dbff" name="color" value="d9dbff"><label for="d9dbff">#d9dbff</label>
            <input type="radio" id="efcaff" name="color" value="efcaff"><label for="efcaff">#efcaff</label>
            <input type="radio" id="d2ecff" name="color" value="d2ecff"><label for="d2ecff">#d2ecff</label>
            <input type="radio" id="i7e86f7" name="color" value="7e86f7"><label for="i7e86f7">#7e86f7</label>
            <input type="radio" id="i71b9d1" name="color" value="71b9d1"><label for="i71b9d1">#71b9d1</label>
            <input type="radio" id="other"  name="color" onchange="if (this.checked) {document.querySelector(':root').style.setProperty('--bg-two', this.value);}"><input type="color" id="colorInput" oninput="document.getElementById('other').value = this.value;if (document.getElementById('other').checked) {document.querySelector(':root').style.setProperty('--bg-two', this.value);}">
        </div>-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                disable: 'mobile'
            });
        </script>
        <script src="./js/index.js"></script>
    </body>
</html>
