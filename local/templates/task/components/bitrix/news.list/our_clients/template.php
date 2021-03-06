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

<? if ($arResult["ITEMS"]): ?>
<section class="client-logo ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Clients</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
			<? foreach($arResult["ITEMS"] as $key => $arItem): ?>
				<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<? if (($key+1)%6 == 1): // 1' из 6 (+-----) ?>
					<div class="row">
				<? endif; ?>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
									<!-- todo <a href="#"> alt="Image"-->
									<a href='<?= $arItem["PROPERTIES"]["IMGANCHOR"]["VALUE"]; ?>'><img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt='<?= $arItem["PROPERTIES"]["IMGALT"]["VALUE"]; ?>'></a>
						</div>
					
				<? if (($key+1)%6 == 0): // 6' из 6 (-----+) ?>
					</div>
					<!-- /.row -->
				<? endif; ?>
					
				<? if ((($key+1)%6 == 1) && (($key+1) == $arResult["own_rm_client_count"])) : // 1' из 6 (+-----) и последний элемент ?>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
					</div>
					<!-- /.row -->
				<? endif; ?>
				
				<? if ((($key+1)%6 == 2) && (($key+1) == $arResult["own_rm_client_count"])) : // 2' из 6 (-+----) и последний элемент ?>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
					</div>
					<!-- /.row -->
				<? endif; ?>
				
				<? if ((($key+1)%6 == 3) && (($key+1) == $arResult["own_rm_client_count"])) : // 3' из 6 (--+---) и последний элемент ?>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
					</div>
					<!-- /.row -->
				<? endif; ?>
				
				<? if ((($key+1)%6 == 4) && (($key+1) == $arResult["own_rm_client_count"])) : // 4' из 6 (---+--) и последний элемент ?>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
					</div>
					<!-- /.row -->
				<? endif; ?>
				
				<? if ((($key+1)%6 == 5) && (($key+1) == $arResult["own_rm_client_count"])) : // 5' из 6 (----+-) и последний элемент ?>
						<div class="col-md-2 col-sm-4 col-xs-6 section-margin"></div>
					</div>
					<!-- /.row -->
				<? endif; ?>
					
			<? endforeach; ?>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->
<? endif; ?>
