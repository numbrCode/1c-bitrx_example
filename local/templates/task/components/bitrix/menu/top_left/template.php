<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="content-wrapper">
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?= SITE_TEMPLATE_PATH.'/img/logo.png'; ?>" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">

<?$APPLICATION->IncludeComponent("bitrix:search.form","top_left",Array(
        "USE_SUGGEST" => "N",
        "PAGE" => "#SITE_DIR#search/index.php"
    )
);?>
					
					<?if (!empty($arResult)):?>
            <ul class="nav navbar-nav navbar-right main-nav">
							
						<?foreach($arResult as $arItem):?>
							<?if (($arItem["DEPTH_LEVEL"] == 1) && empty($arItem["IS_PARENT"])):?>
								<?if ($arItem["SELECTED"]):?>
									<li class="active"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
								<?else:?>
									<li><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
								<?endif?>
							<?endif?>
						<?endforeach?>
							
							<?foreach($arResult as $arItem):?>
								<?if (($arItem["DEPTH_LEVEL"] == 1) && ($arItem["IS_PARENT"] == 1)): // Features ?>
									<li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><?=$arItem["TEXT"]?>
                    <span><i class="fa fa-angle-down"></i></span></a>
								<?endif?>
							<?endforeach?>
							
                    <ul class="dropdown-menu">
                        <li>
                            <div class="m-menu-content">
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
															<?foreach($arResult as $arItem):?>
																<?if (($arItem["DEPTH_LEVEL"] == 2) && empty($arItem["IS_PARENT"])):?>
																	<?if ($arItem["SELECTED"]):?>
																		<li class="active"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
																		<?else:?>
																		<li><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
																	<?endif?>
																<?endif?>
															<?endforeach?>
                                </ul>

                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
															<?foreach($arResult as $arItem):?>
																<?if (($arItem["DEPTH_LEVEL"] == 2) && empty($arItem["IS_PARENT"])):?>
																	<?if ($arItem["SELECTED"]):?>
																		<li class="active"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
																		<?else:?>
																		<li><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
																	<?endif?>
																<?endif?>
															<?endforeach?>
                                </ul>

                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
															<?foreach($arResult as $arItem):?>
																<?if (($arItem["DEPTH_LEVEL"] == 2) && empty($arItem["IS_PARENT"])):?>
																	<?if ($arItem["SELECTED"]):?>
																		<li class="active"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
																		<?else:?>
																		<li><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
																	<?endif?>
																<?endif?>
															<?endforeach?>
                                </ul>
																
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
															<?foreach($arResult as $arItem):?>
																<?if (($arItem["DEPTH_LEVEL"] == 2) && empty($arItem["IS_PARENT"])):?>
																	<?if ($arItem["SELECTED"]):?>
																		<li class="active"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
																		<?else:?>
																		<li><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
																	<?endif?>
																<?endif?>
															<?endforeach?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
					<?endif?>
        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->