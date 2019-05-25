<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Welcome to Project eSport\'s';

$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://project-esport.gg' . Yii::$app->request->url]);

Yii::$app->MetaClass->writeMetaIndex($this, $this->title);

?>

<div class="site-index">
    <main>

        <div class="col-lg-9 welcome">
            <div class="newsContainer">
                <div class="containerHeader">
                    <span class="headerKategorie"><img src="../images/gameLogos/1.webp">Rocket League</span>
                    <span class="headerTitle">Gerta Cup Season 3 2v2 Day 1</span>
                    <span class="headerDate">25.05.2019</span>
                </div>
                <div class="containerBody clearfix">
                    <div class="containerImage col-lg-3"><img src="https://pbs.twimg.com/media/D7bEW_JUIAAGHkj?format=jpg&name=small" alt="" style="width: 100%;     padding-top: 33px;"></div>
                    <div class="containerText col-lg-9">
                        Congratulations to <?= Html::a('Stealth 7 eSports', ['/teams/sub-team-details', 'id' => '9']); ?> to this amazing win Today in 2v2.<br>
                        They beat 8 other participating Teams on the first Day of the new Season.<br>
                        After a long Fight they gets the First 20 Points for the 600€ Season Price Pool.
                        <br><br>
                        Second Place: <?= Html::a('ILV | Titanium White', ['/teams/sub-team-details', 'id' => '42']); ?> with 17 Points<br>
                        Third Place: <?= Html::a('WarKidZ eSports', ['/teams/sub-team-details', 'id' => '37']); ?> with 15 Points<br>
                    </div>
                    <div class="containerAuthor">Birnchen</div>
                </div>
            </div>

            <div class="newsContainer">
                <div class="containerHeader">
                    <span class="headerKategorie"><img src="../images/PeSpLogos/pesp.png">Website</span>
                    <span class="headerTitle">Team up and get Ready</span>
                    <span class="headerDate">25.05.2019</span>
                </div>
                <div class="containerBody clearfix">
                    <div class="containerImage col-lg-3"><img src="../images/PeSpLogos/pesp.png" alt="" style="width: 100%; padding-top: 25px;"></div>
                    <div class="containerText col-lg-9">
                        It's done!!!<br>                  
                        Players and teams can finally manage themselves.<br>
                        <br>
                        Players:<br>
                        Go to your account and click on the button next to Main Team. Congratulations you have created your first own team with us.<br>
                        <br>
                        Teams:<br>
                        Go to your Main Team (via Account) and click on the button next to Sub Teams. Congratulations you have created your first own sub team with us.
                        <br>
                    </div>
                    <div class="containerAuthor">Birnchen</div>
                </div>
            </div>

            <div class="newsContainer">
                <div class="containerHeader">
                    <span class="headerKategorie"><img src="../images/gameLogos/1.webp">Rocket League</span>
                    <span class="headerTitle">Gerta Cup Season 3 1v1 Day 1</span>
                    <span class="headerDate">24.05.2019</span>
                </div>
                <div class="containerBody clearfix">
                    <div class="containerImage col-lg-3"><img src="https://pbs.twimg.com/media/D7Xrs37UYAAt_xi?format=jpg&name=small" alt="" style="width: 100%;     padding-top: 33px;"></div>
                    <div class="containerText col-lg-9">
                        Congratulations to <?= Html::a('xer02rl', ['/user/details', 'id' => '156']); ?> to this amazing win Today in 1v1.<br>
                        He beat 15 other participating Players on the first Day of the new Season.<br>
                        After a long Night he gets the First 20 Points for the 600€ Season Price Pool.
                        <br><br>
                        Second Place: <?= Html::a('Dongiii', ['/user/details', 'id' => '162']); ?> with 17 Points<br>
                        Third Place: <?= Html::a('NoAvian', ['/user/details', 'id' => '38']); ?> with 15 Points<br>
                    </div>
                    <div class="containerAuthor">Birnchen</div>
                </div>
            </div>
        </div>



        <div class="col-lg-3">
            <?= Html::a('Tweets by project-eSport', 'https://twitter.com/' . 'esport_project' . '?ref_src=twsrc%5Etfw', ['class' => 'twitter-timeline', 'target' => '_blank', 'rel' =>'noopener', 'aria-label' => 'twitter-timeline', 'label' => 'twitter-timeline', 'data-lang' => 'en', 'data-height' => '400', 'data-theme' => 'light']); ?>
        </div>

    </main>
</div>