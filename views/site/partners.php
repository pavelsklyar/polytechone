<?php

/**
 * @var $page \app\base\Page;
 * @var $title - заголовок
 * @var $content - массив с контентом
 */

$page->title = "Наши партнёры - Polytech:ONE";

?>

<div class="partSmoke"><img class="img" src="/images/partners/partSmoke.png"></div>
<main class="partners">
    <h1 class="headline"><?= $title ?></h1>
    <!--MP-->
    <div class="mpH1">
        <?= $content['partner1'] ?>
        <div class="lineMpH1">
            <img src="/images/partners/partHr.png">
        </div>
    </div>
    <div class="mp">
        <div class="mpBox">
            <div class="mpText1">
                <?= $content['text1'] ?>
            </div>
            <div class="mpLogo">
                <img src="/images/partners/mpLogo.png">
            </div>
        </div>
        <div class="mpText2">
            <?= $content['text2'] ?>
        </div>
    </div>
    <!--Motul-->
    <div class="mtlFrst">
        <div class="mtlH1">
            <?= $content['partner2'] ?>
            <div class="lineMtlH1">
                <img src="/images/partners/partHr.png">
            </div>
        </div>
        <div class="mtlText1">
            <?= $content['text3'] ?>
        </div>
    </div>
    <div class="mtlScnd">
        <div class="mtlLogo">
            <img src="/images/partners/mtlLogo.png">
        </div>
        <div class="mtlTextBox">
            <div class="mtlText2">
                <?= $content['text4'] ?>
            </div>
            <div class="mtlText3">
                <?= $content['text5'] ?>
            </div>
        </div>
    </div>    
    <!--JBT-->
    <div class="jbt">
        <div class="jbtH1">
            <?= $content['partner3'] ?>
            <div class="lineJbtH1">
                <img src="/images/partners/partHr.png">
            </div>
        </div>
        <div class="jbtTextBox">
            <div class="jbtText1">
                <?= $content['text6'] ?>
            </div>
            <div class="jbtText2">
                <?= $content['text7'] ?>
            </div>
            <div class="jbtBackImg">
                <img src="/images/partners/jbtBackImg.png">
            </div>
        </div>
    </div>
    <!--Airline-->
    <div class="airH1">
        <?= $content['partner4'] ?>
        <div class="lineAirH1">
            <img src="/images/partners/partHr.png">
        </div>
    </div>
    <div class="air">
        <div class="airLogo">
            <img src="/images/partners/airLogo.png">
        </div>
        <div class="airText">
            <?= $content['text8'] ?>
        </div>
    </div>
    <!--Henkel-->
    <div class="henBackImg">
        <img src="/images/partners/henBack.png">
    </div>
    <div class="henH1">
        <?= $content['partner5'] ?>
        <div class="lineHenH1">
            <img src="/images/partners/partHr.png">
        </div>
    </div>
    <div class="hen">
        <div class="henText1">
            <?= $content['text9'] ?>
        </div>
        <div class="henBox">
            <div class="henLogo">
                <img src="/images/partners/henLogo.png"><!--1-->
            </div>
            <div class="henText2">
                <?= $content['text10'] ?>
            </div>
        </div>
        <div class="henText3">
            <?= $content['text11'] ?>
            <p><?= $content['text12'] ?></p>
            <p><?= $content['text13'] ?></p>
        </div>
    </div>
    <!--Gates-->
   <div class="gat_cri">
        <div class="gat">
            <div class="gatH1">
                <?= $content['partner6'] ?>
                <div class="lineGatH1">
                    <img src="/images/partners/partHr.png">
                </div>
            </div>
            <div class="gatText1">
                <?= $content['text14'] ?>
                <p><?= $content['text15'] ?></p>
            </div>
            <div class="gatLogo">
                <img src="/images/partners/gatLogo.png">
            </div>
        </div>
        <!--CRI-->
        <div class="cri">
            <div class="criH1">
                <?= $content['partner7'] ?>
                <div class="lineCriH1">
                    <img src="/images/partners/partHr.png">
                </div>
            </div>
            <div class="criBox">
                <div class="criLogo">
                    <img src="/images/partners/criLogo.png">
                </div>
                <div class="criText1">
                    <?= $content['text16'] ?>
                </div>
            </div>
        </div>
    </div>
    <!--FDR-->
    <div class="fdrH1">
        <?= $content['partner8'] ?>
        <div class="lineFdrH1">
            <img src="/images/partners/partHr.png">
        </div>
    </div>
    <div class="fdr">
        <div class="fdrText1">
            <?= $content['text17'] ?>
        </div>
        <div class="fdrLogo">
            <img src="/images/partners/fdrLogo.png">
        </div>
    </div>
    <!--ShonX-->
    <div class="shonH1">
        <?= $content['partner9'] ?>
        <div class="lineShonH1">
            <img src="/images/partners/partHr.png">
        </div>
    </div>
    <div class="shon">
        <div class="shonLogo">
            <img src="/images/partners/shonXLogo.png">
        </div>
        <div class="shonText1">
            <?= $content['text18'] ?>
        </div>
    </div>
</main>