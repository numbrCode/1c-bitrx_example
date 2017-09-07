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

<? if($arResult["ITEMS"]): ?>
<section class="testimonial">
    <section class="section-title">
        <div class="container text-center">
            <h2>Satisfied Customer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
							
							<? foreach($arResult["ITEMS"] as $key => $arItem): ?>
								<?
									$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
									$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
								?>
								<? if($key == 0): ?>
								<div class="item active" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
								<? else: ?>
								<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
								<? endif; ?>
                    <blockquote>
                        <ul>
                          <li><img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" class="img-responsive" alt=""/></li>
                          <li class="name"><?= $arItem["NAME"]; ?></li>
												</ul>
                        <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                    </blockquote>
                </div>
							<? endforeach; ?>

            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- .testimonial -->
<? endif; ?>

