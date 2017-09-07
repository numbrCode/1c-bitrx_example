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
<!-- .page-title -->
<section class="service-icon-style ptb-100"> <section class="section-title">
	<div class="container text-center">
		<h2>Solutions For Your Business!</h2>
	 <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
	</div>
</section>

  <div class="container text-center">
		
		<? foreach($arResult["ITEMS"] as $key => $arItem): ?>
			<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				//$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));  // Сокрытие кнопки "Удалить" в режиме правки на сайте
			?>

			<? if (($key+1)%4 == 1): // 1' из 4 (+---) ?>
				<div class="row">
			<? endif; ?>
			
					<div class="col-sm-6 col-md-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="promo-block-wrapper clearfix">
							<div class="promo-icon">
								<i class='<?= $arItem["PROPERTIES"]["CISOLUTION"]["VALUE"]; ?>'></i>
							</div>
							<div class="promo-content">
								<h3><?= $arItem["NAME"]; ?></h3>
								<p>
									 <?= $arItem["PROPERTIES"]["TSOLUTION"]["VALUE"]["TEXT"]; ?>
								</p>
							</div>
						</div>
						 <!-- /.promo-block-wrapper -->
					</div>
				
				<? if (($key+1)%4 == 0): // 4' из 4 (---+) ?>
					</div>
					<!-- /.row -->
				<? endif; ?>
				
				<? if ((($key+1)%6 == 1) && (($key+1) == $arResult["own_rm_services_solutions_count"])) : // 1' из 4 (+---) и последний элемент ?>
						<div class="col-sm-6 col-md-3"></div>
						<div class="col-sm-6 col-md-3"></div>
						<div class="col-sm-6 col-md-3"></div>
					</div>
					<!-- /.row -->
				<? endif; ?>
				
				<? if ((($key+1)%6 == 2) && (($key+1) == $arResult["own_rm_services_solutions_count"])) : // 2' из 4 (-+--) и последний элемент ?>
						<div class="col-sm-6 col-md-3"></div>
						<div class="col-sm-6 col-md-3"></div>
					</div>
					<!-- /.row -->
				<? endif; ?>
				
				<? if ((($key+1)%6 == 3) && (($key+1) == $arResult["own_rm_services_solutions_count"])) : // 3' из 4 (--+-) и последний элемент ?>
						<div class="col-sm-6 col-md-3"></div>
					</div>
					<!-- /.row -->
				<? endif; ?>
				
		<? endforeach; ?>
  </div>

</section>
<!-- .about-text-->
<? endif; ?>

