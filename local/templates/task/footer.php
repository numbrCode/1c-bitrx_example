<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die();
?>


<footer class="footer">

    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <div class="footer-logo">
                          <? $APPLICATION->IncludeFile(SITE_DIR."include/footer_logo.php",
																array(),
																array("MODE"=>"html")
															);
													?>
                        </div>
                        <p>
													<? $APPLICATION->IncludeFile(SITE_DIR."include/footer_p.php",
																array(),
																array("MODE"=>"html")
															);
													?>
												</p>
                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <h3>
													<? $APPLICATION->IncludeFile(SITE_DIR."include/footer_profit.php",
																array(),
																array("MODE"=>"html")
															);
													?>
												</h3>
                        <p>
													<? $APPLICATION->IncludeFile(SITE_DIR."include/footer_profit_p.php",
																array(),
																array("MODE"=>"html")
															);
													?>
												</p>
                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">
											<h3>Contact Us Today</h3>
											<address>
												<? $APPLICATION->IncludeFile(SITE_DIR."include/footer_adress.php",
															array(),
															array("MODE"=>"html")
														);
												?>
											</address>
											<?
												$APPLICATION->IncludeComponent(
													"bitrix:menu", 
													"social_network", 
													array(
														"ALLOW_MULTI_SELECT" => "N",
														"CHILD_MENU_TYPE" => "left",
														"COMPONENT_TEMPLATE" => "social_network",
														"DELAY" => "N",
														"MAX_LEVEL" => "2",
														"MENU_CACHE_GET_VARS" => array(
														),
														"MENU_CACHE_TIME" => "3600",
														"MENU_CACHE_TYPE" => "A",
														"MENU_CACHE_USE_GROUPS" => "Y",
														"ROOT_MENU_TYPE" => "social_network",
														"USE_EXT" => "Y"
													),
													false
												);
											?>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>
    </div><!-- /.Footer Widget Section -->

		<?
			$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"bottom", 
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"COMPONENT_TEMPLATE" => "bottom",
					"DELAY" => "N",
					"MAX_LEVEL" => "2",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "bottom",
					"USE_EXT" => "Y"
				),
				false
			);
		?>
</footer>
<!-- .footer -->
</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->


<!-- Script -->
<? use Bitrix\Main\Page\Asset; // D7 ?>

<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-2.1.4.min.js'); ?>

<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/com_local/maxcdn.bootstrapcdn.com/bootstrap/js/bootstrap.min.js'); ?>

<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/smoothscroll.js'); ?>

<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/mobile-menu.js'); ?>

<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/flexSlider/jquery.flexslider-min.js'); ?>

<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/scripts.js'); ?>

<div/>
		<a style="font-size:0; height:0; width:0; opacity:0; position:absolute" target="_blank" href="http://www.uicookies.com">HTML Templates by uiCookies</a>        
	</div>
</body>
</html>
