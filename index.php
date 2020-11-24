<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Health Chat Bot</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://specials-images.forbesimg.com/imageserve/1211364644/960x0.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <!-- Markup for HTML (2019 Novel Coronavirus (COVID19): Coronavirus Disease 2019 (COVID-19)) -->
    <div class='rid_4f002aee_403277' data-apiroot='//tools.cdc.gov/api' data-mediatype='html' data-mediaid='403277' data-stripscripts='true' data-stripanchors='false' data-stripimages='false' data-stripcomments='true' data-stripstyles='true' data-cssclasses='syndicate,!no-syndicate' data-ids='' data-xpath='' data-oe='utf-8' data-of='xhtml' data-ns='cdc' data-postprocess='' data-nw='true' data-iframe='true' data-cdc-widget='syndicationIframe' data-apiembedsrc='//tools.cdc.gov/api/embed/html/js/embed-2.0.3.js' data-iframeembedsrc='//tools.cdc.gov/TemplatePackage/contrib/widgets/tp-widget-external-loader.js'></div>
    <script src='//tools.cdc.gov/TemplatePackage/contrib/widgets/tp-widget-external-loader.js'></script><noscript>You need javascript enabled to view this content or go to <a href='//tools.cdc.gov/api/v2/resources/media/403277/noscript'>source URL</a>.</noscript>

    <!-- covid-19-health-chatbot start -->
    <div style="display: inline-block;height: 153px;position: fixed;right: 0;top: 455px;/* top: 30vh; */z-index: 10000;background-color: aliceblue;margin-right: 45px;" data-cdc-widget='healthBot' data-cdc-theme='theme1' class='cdc-widget-color-white'  data-cdc-language='en-us'></div>
    <script src='https://t.cdc.gov/1M1B'></script>
    <!-- covid-19-health-chatbot bot end -->

    <button class="cdc-chatbot-button" title="Check your symptoms using a CDC chat bot.">

    <img src="https://www.cdc.gov/TemplatePackage/contrib/widgets/healthBot/covid19/images/cdcLogo.svg" />Coronavirus

    Self-Checker

</button>
 

<div class="cdc-chatbot-overlay cdc-chatbot-closed">

    <div class="cdc-chatbot-header">

        <img src="https://www.cdc.gov/TemplatePackage/contrib/widgets/healthBot/covid19/images/cdcLogo.svg" />

        <span class="cdc-chatbot-headerText">Coronavirus Self-Checker.io</span>

        <button type="button" class="cdc-chatbot-close" aria-label="Close" tab-index="2">

            <span aria-hidden="true">×</span>

        </button>

    </div>

    <iframe src="" width="100%"></iframe>

</div>


<script>

    function cdcChatbot(shouldRenderFixed) {

        var transitionMs = 3333; // Match css transition

        var cdcChatbotOpening;

        var cdcChatbotClosing;

 

        function toggleCdcChatbot() {

            var cdcChatbotOverlay = $(".cdc-chatbot-overlay");

            if (

                cdcChatbotOverlay.hasClass("cdc-chatbot-closed") ||

                cdcChatbotOverlay.hasClass("cdc-chatbot-closing")

            ) {

                var iframe = cdcChatbotOverlay.find("iframe");

                iframe.attr("src", "https://covid19healthbot.cdc.gov/");

                iframe.focus();

                cdcChatbotOverlay

                    .removeClass("cdc-chatbot-closing")

                    .removeClass("cdc-chatbot-closed");

                cdcChatbotOverlay.addClass("cdc-chatbot-opening");

                clearTimeout(cdcChatbotOpening);

                clearTimeout(cdcChatbotClosing);

                cdcChatbotOpening = setTimeout(function () {

                    cdcChatbotOverlay

                        .addClass("cdc-chatbot-opened")

                        .removeClass("cdc-chatbot-opening");

               }, transitionMs);

            } else {

                // Re-focus button

                $(".cdc-chatbot-button").focus();

                cdcChatbotOverlay.addClass("cdc-chatbot-closing");

                cdcChatbotOverlay

                    .removeClass("cdc-chatbot-opening")

                    .removeClass("cdc-chatbot-opened");

                clearTimeout(cdcChatbotOpening);

                clearTimeout(cdcChatbotClosing);

                cdcChatbotClosing = setTimeout(function () {

                   cdcChatbotOverlay

                        .addClass("cdc-chatbot-closed")

                        .removeClass("cdc-chatbot-closing");

                }, transitionMs);

            }

        }

 

        function initializeCdcChatbot() {

            console.log("cdc chatbot - init");

            var chatbotButton = $(".cdc-chatbot-button");

 

            if (shouldRenderFixed) {

                console.log("cdc chatbot - rendered as fixed button");

                chatbotButton.addClass("cdc-chatbot-buttonFixed");

 

                // Move to root of DOM to get high z-index priority

                var renderedButton = chatbotButton.clone();

                chatbotButton.remove();

                $("body").append(renderedButton);

            } else {

                console.log("cdc chatbot - no special rendering.");

            }

 

            // Move overlay to root of DOM to get high z-index priority

            var overlay = $(".cdc-chatbot-overlay");

            var renderedOverlay = overlay.clone();

            overlay.remove();

            $("body").append(renderedOverlay);

 

            // Enable button clicks

            $(".cdc-chatbot-close").click(toggleCdcChatbot);

            $(".cdc-chatbot-button").click(toggleCdcChatbot);

        }

        $(document).ready(function () {

            initializeCdcChatbot();

        });

    }

    cdcChatbot(true);

</script>


<style>

    .cdc-chatbot-buttonFixed {

        position: fixed;

        bottom: 0;

        right: 2em;

        border: 1px solid #fff;

        border-bottom: none;

    }

 

    .cdc-chatbot-button {

        background-color: #005eaa;

        color: #fff;

        padding: 0.5rem 1rem;

        width: 270px;

        text-align: center;

        transition: background-color ease-in-out 0.3333s;

        z-index: 999999999;

    }

 

    .cdc-chatbot-button:hover,

    .cdc-chatbot-button:focus {

        background-color: #003b6b;

    }

 

    .cdc-chatbot-header img,

    .cdc-chatbot-button img {

        display: inline;

        width: 100%;

        max-width: 32px;

        margin-right: 0.5em;

    }

 

    .cdc-chatbot-header {

        transition: opacity ease-in-out 0.3333s;

    }

 

    .cdc-chatbot-headerText {

        flex-grow: 1;

    }

 

    .cdc-chatbot-header .cdc-chatbot-close {

        background: none;

        color: #fff;

        border: none;

        margin-left: auto;

    }

 

    .cdc-chatbot-overlay {

        position: fixed;

        bottom: 0;

        right: 2em;

        width: 500px;

        max-width: calc(100vw - 4em);

        border-bottom: none;

        border-top: none;

        line-height: 0;

        z-index: 999999999;

        background: #fff;

        opacity: 1;

        transition: opacity ease-in-out 0.3333s, height ease-in-out 0.3333s;

        height: 738px;

        max-height: 100%;

        display: flex;

        flex-direction: column;

    }

 

    .cdc-chatbot-closing .cdc-chatbot-overlay {

        opacity: 0;

    }

 

    .cdc-chatbot-closed .cdc-chatbot-overlay {

        display: none;

    }

 

    .cdc-chatbot-overlay iframe {

        border: none;

        height: 700px;

        max-height: calc(100% - 38px);

    }

 

    .cdc-chatbot-closing .cdc-chatbot-header {

        opacity: 0;

    }

 

    .cdc-chatbot-opening .cdc-chatbot-header,

    .cdc-chatbot-open .cdc-chatbot-header {

        opacity: 1;

    }

 

    .cdc-chatbot-closed,

    .cdc-chatbot-closing {

        height: 0;

        overflow: hidden;

    }

 

    .cdc-chatbot-opening {

        overflow: hidden;

    }

 

    .cdc-chatbot-header,

    .cdc-chatbot-button {

        background: #005eaa;

        color: #fff;

        padding: 0.5rem 1rem;

        border: 1px solid #fff;

        border-bottom: none;

        display: flex;

        align-items: center;

        justify-content: center;

    }

</style>

</body>

</html>