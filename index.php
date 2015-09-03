<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $pageTitle = 'Female voice over talent, voice actor and vocalist | Carilyn Mae Fukura';
    $pageDesc = '';

    require_once($path.'/library/include/config/func.inc.php');
    require_once($path.'/library/include/head.inc.php');
?>
    
    <style>
    </style>
    <section id="vcard" class="hero">
        <div class="container_12">
            <div class="grid_8 push_2">
                <h1><span class="pageTitle">Carilyn Mae</span> <span class="pageSubTitle">Voice Over Artist</span></h1>
                <h2 class="pageIntro">Bringing professional sound with a clear voice, and an added personal touch to your brand.</h2>
                <a href="#">Play reel</a>
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
    <section id="samples" class="samples">
        <div class="container_12" style="text-align:center;">
            <h1 class="headline">Voice over work</h1>
            <h2 class="body-intro">Corporate training, app sizzle and commercial work</h2>
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
                <h1 class="headline">My voice, your brand.</h1>
                <div class="grid_4 alpha" itemscope itemtype="http://schema.org/Person">
                    <div itemprop="name"><strong>Carilyn Mae Fukura</strong></div>
                    <div itemprop="jobtitle">Voice Over Artist</div>
                    <ul class="links bt-ul">
                        <li class="links_item"><i class="btr bt-home bt-li"></i><a itemprop="url" href="www.carifukura.com">www.carifukura.com</a></li>
                        <li class="links_item"><i class="btr bt-envelope bt-li"></i><a itemprop="email" href="mailto:cari@carifukura.com">cari@carifukura.com</a></li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="social">
                        <li class="social_item"><a rel="me" itemprop="url" href="#" class="social_item_target facebook"><i class="fab fab-facebook"></i></a></li>
                        <li class="social_item"><a rel="me" itemprop="url" href="#" class="social_item_target youtube"><i class="fab fab-youtube"></i></a></li>
                        <li class="social_item"><a rel="me" itemprop="url" href="#" class="social_item_target soundcloud"><i class="fab fab-soundcloud"></i></a></li>
                        <li class="social_item"><a rel="me" itemprop="url" href="#" class="social_item_target linkedin"><i class="fab fab-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="grid_6 omega">
                    To<br>
                    cari.carifukura.com
                    <form>
                        <div class="infield-wrap">
                            <label for="name" class="infield_label">Name</label>
                            <input type="text" name="name" class="infield_input" placeholder="Cari Fukura">
                        </div>
                        <div class="infield-wrap">
                            <label for="email" class="infield_label">Email Address</label>
                            <input type="email" name="email" class="infield_input" placeholder="cari@carifukura.com">
                        </div>
                        <div class="infield-wrap form-url">
                            <label for="url" class="infield_label">Url</label>
                            <input type="url" name="url" class="infield_input" placeholder="www.carifukura.com">
                        </div>
                        <div class="infield-wrap">
                            <label for="name" class="infield_label">Message</label>
                            <textarea type="text" name="name" class="infield_input"></textarea>
                        </div>
                    </form>

                    button                    
                </div>
            </div>
        </div>
    </section>
    
    <script src="/library/script/jquery-1.7.2.min.js"></script>
    <script src="/library/script/scripts.js"></script>
    <script src="/library/script/plugins/360player/berniecode-animator.js"></script>
    <script src="/library/script/plugins/360player/soundmanager2.min.js"></script>
    <script src="/library/script/plugins/360player/360player.js"></script>
    <link rel="stylesheet" href="/library/script/plugins/360player/360player.css">
    <script type="text/javascript">
        soundManager.setup({
          // path to directory containing SM2 SWF
          url: ''
        });
    </script>

<?php
    require_once($path.'/library/include/foot.inc.php');
?>