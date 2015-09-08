<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $pageTitle = 'Female voice over talent, voice actor and vocalist | Carilyn Mae Fukura';
    $pageDesc = '';

    require_once($path.'/library/include/config/func.inc.php');
    require_once($path.'/library/include/head.inc.php');
?>
    
    <style>
    </style>
    <section id="vcard" class="w-hero">
        <div class="hero">
            <div class="container_12">
                <div class="grid_8 push_2">
                    <div class="hero_card">
                        <h1><span class="pageTitle">Carilyn Mae</span> <span class="pageSubTitle">Voice Over Artist</span></h1>
                        <h2 class="pageIntro" style="padding:0 2em;">Bringing professional sound with a clear voice, and an added personal touch to your brand.</h2>                        
                    </div>
    <!--                <a href="#">Play reel</a>-->
                </div>
            </div>            
        </div>
    </section>
    <section id="about" class="container_12">
        <article class="grid_10 push_1 article-main">
            <header class="header--article grid_6 alpha">
                <h1 class="headline">The human voice has always been my passion.</h1>
<!--                <h1 class="headline">A Northwest voice with Midwestern roots</h1>-->
            </header>
            <section class="grid_4 omega">
                <h2 class="body-intro">I've spent my entire life refining my technique</h2>
                <p style="display:inline;"> of vocal control through theater, public speaking, voice over, singing, and as a vocal coach.  In 2006 I received my Bachelor of Arts degree in Music and spent four years right out of college as a private voice and piano instructor.  Since then, I have taken on multiple contracts as a voice over artist for companies in marketing and advertising.</p>
                <p>My voice can be molded to your needs, and from my home studio, we generate clean, professional, hi-fidelity audio for your projects to ensure you get the voice you're looking for to represent your brand.</p>
                <img src="/images/cari-sig-temp.png" alt="Cari Fukura" width="80" />
            </section>
        </article>
    </section>
    <section id="rtb" class="w-rtbs">
        <header class="container_12 rtb-header">
            <h1 class="headline">Voice over work</h1>
            <h2 class="body-intro">Corporate training, app sizzle and commercial work</h2>            
        </header>
        <ul class="container_12 rtb-container">
            <li class="grid_4">
                <div class="rtb matchHeight">
                    <i class="btl bt-trophy rtb_icon"></i>
                    <h3 class="subheadline">Trained Vocalist</h3>
                    <p>More than just "a good voice," as a classically trained vocalist with experience in theater and vocal coaching, I have a finely tuned instrument that I am passionate about.</p>                    
                </div>
            </li>
            <li class="grid_4">
                <div class="rtb matchHeight">
                    <i class="btl bt-briefcase rtb_icon"></i>
                    <h3 class="subheadline">Professional yet, fun</h3>
                    <p>You choose your sound.  As a mother of three, I can turn the fun voices on when I want, but I have experience doing voice-over work for software companies who require a more professional sound.</p>
                </div>
            </li>
            <li class="grid_4">
                <div class="rtb matchHeight">
                    <i class="btl bt-volume-up rtb_icon"></i>
                    <h3 class="subheadline">Clean audio, delivered</h3>
                    <p>From my home studio, I have everything needed to deliver high quality audio &mdash; including powerful audio mastering software and the skills to use it.</p>
                </div>
            </li>
        </ul>
    </section>
    <section id="samples" class="samples">
        <div class="container_12" style="text-align:center;">
            
            <?php samples(); ?>
        </div>
    </section>

<!--
    <section id="clients"></section>
    <section id="blog"></section>
-->

    <section id="contact" class="contact">
        <div class="container_12">
            <div class="grid_10 push_1">
                <h1 class="headline grid_6 alpha">My voice, your brand.</h1>
                <div class="grid_4 omega vcard" itemscope itemtype="http://schema.org/Person">
                    <div itemprop="name" class="vcard_name">Carilyn Mae Fukura</div>
                    <div itemprop="jobtitle" class="vcard_title">Voice Over Artist</div>
                    <ul class="social">
                        <li class="social_item"><a rel="me" itemprop="url" href="#" class="social_item_target facebook"><i class="fab fab-facebook"></i></a></li>
                        <li class="social_item"><a rel="me" itemprop="url" href="#" class="social_item_target youtube"><i class="fab fab-youtube"></i></a></li>
                        <li class="social_item"><a rel="me" itemprop="url" href="#" class="social_item_target soundcloud"><i class="fab fab-soundcloud"></i></a></li>
                        <li class="social_item"><a rel="me" itemprop="url" href="#" class="social_item_target linkedin"><i class="fab fab-linkedin"></i></a></li>
                    </ul>
                    <ul class="links bt-ul">
                        <li class="links_item"><i class="btr bt-home bt-li"></i><a itemprop="url" href="www.carifukura.com">www.carifukura.com</a></li>
                        <li class="links_item"><i class="btr bt-envelope bt-li"></i><a itemprop="email" href="mailto:cari@carifukura.com">cari@carifukura.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php
    require_once($path.'/library/include/foot.inc.php');
?>