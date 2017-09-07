<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <div class="copyright-section">
        <div class="container clearfix">
					<? $APPLICATION->IncludeFile(SITE_DIR."include/footer_year.php",
								array(),
								array("MODE"=>"html")
							);
					?>

					<? if ($arResult): ?>
						<ul class="list-inline pull-right">
							<? foreach($arResult as $arItem): ?>
								<?if ($arItem["SELECTED"]):?>
									<li class="active"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
								<?else:?>
									<li><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
								<?endif?>
							<? endforeach; ?>
						</ul>
					<? endif; ?>
        </div><!-- .container -->
    </div><!-- .copyright-section -->
