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
<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
			<? if ($arResult["own_rm_slider_count"]): // Предложения есть ?>
				<? for($i = 0; $i < $arResult["own_rm_slider_count"]; $i++): ?>
					<li data-target="#x-corp-carousel" data-slide-to="<?= $i; ?>"
					<? if ($i == 0): ?>
						class="active"
					<? endif; ?>
						></li>
				<? endfor; ?>
			<? endif; ?>
    </ol>

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
				<img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT']; ?>">
				<div class="carousel-caption">
					<h1><?= $arItem["PROPERTIES"]["hslide"]["VALUE"]; ?></h1>
					<p><?= $arItem["PROPERTIES"]["pslide"]["VALUE"]["TEXT"]; ?></p>
				</div>
			</div>
		<? endforeach; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #x-corp-carousel-->
<? endif; ?>

