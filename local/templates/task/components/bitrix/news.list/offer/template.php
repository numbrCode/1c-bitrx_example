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
<section class="x-services ptb-100 gray-bg">

    <section class="section-title">
        <div class="container text-center">
            <h2>What We Offer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

		<div class="container">
			<? if ($arResult["own_rm_offers_count"]): // Предложения есть ?>
				<? for($i = 0; $i < $arResult["own_rm_offers_count"]; $i++): ?>
					<?
						$this->AddEditAction($arResult["ITEMS"]["$i"]['ID'], $arResult["ITEMS"]["$i"]['EDIT_LINK'], CIBlock::GetArrayByID($arResult["ITEMS"]["$i"]["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arResult["ITEMS"]["$i"]['ID'], $arResult["ITEMS"]["$i"]['DELETE_LINK'], CIBlock::GetArrayByID($arResult["ITEMS"]["$i"]["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<? if (($i+1)%2 == 1): // Нечётное предложение ?>
						<!-- row -->
						<div class="row">
					<? endif; ?>
					
					<div class="col-md-6">
								<div class="thumbnail clearfix" id="<?=$this->GetEditAreaId($arResult["ITEMS"]["$i"]['ID']);?>">
                    <a href='<?= $arResult["ITEMS"]["$i"]["PROPERTIES"]["aoffer"]["VALUE"]; ?>'><img class="img-responsive" src='<?= $arResult["ITEMS"]["$i"]["PREVIEW_PICTURE"]["SRC"]; ?>' alt='<?= $arResult["ITEMS"]["$i"]["PREVIEW_PICTURE"]["DESCRIPTION"]; ?>'></a>

                    <div class="caption">
                        <h3><a href='<?= $arResult["ITEMS"]["$i"]["PROPERTIES"]["aoffer"]["VALUE"]; ?>'><?= $arResult["ITEMS"]["$i"]["NAME"]; ?></a></h3>
                        <p><?= $arResult["ITEMS"]["$i"]["PROPERTIES"]["poffer"]["VALUE"]["TEXT"]; ?></p>
                    </div>
                </div>
            </div>

					<? if (($i+1)%2 == 0): // Чётное ?>
						</div>
						<!-- .row -->
					<? endif; ?>
					
					<? if ((($i+1)%2 == 1) && (($i+1) == $arResult["own_rm_offers_count"])): // Нечётное и последнее предложение ?>
					    <div class="col-md-6">
							</div>

						</div>
						<!-- .row -->
					<? endif; ?>	
				<? endfor; ?>
			<? endif; ?>

    </div>
    <!-- .container -->
</section>
<!-- .x-services -->
<?endif;?>

