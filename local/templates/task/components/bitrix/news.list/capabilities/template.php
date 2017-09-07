<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? //echo'<br>$templateFile = '.$templateFile.'<br>'; ?>

<? if ($arResult["ITEMS"]): ?>
<section class="x-features">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Capabilities</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 img-left">
								<?$APPLICATION->IncludeFile(
									SITE_DIR."include/capabilities-img.php",
									array(),
									array("MODE"=>"html")
								);?>
            </div>
            <div class="col-md-6">
							
                <? foreach($arResult["ITEMS"] as $arItem): ?>
									<?
										$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
										$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
									?>
								<div class="promo-block-wrapper clearfix" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
										<div class="promo-icon">
                        <i class="<?= $arItem['PROPERTIES']['iclass']['VALUE']; ?>"></i>
                    </div>
                    <div class="promo-content">
                        <h3><?= $arItem['FIELDS']['NAME']; ?></h3>
                        <p><?= $arItem["PROPERTIES"]["pcapabilities"]["VALUE"]["TEXT"]; ?>.</p>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->					
								<? endforeach; ?>

            </div>
        </div>
    </div>
</section>
<!-- .x-features -->
<? endif; ?>

