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
<section class="team ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Team</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
      <? if ($arResult["own_rm_employee_count"]): // Сотрудники есть ?>
				<? for($i = 0; $i < $arResult["own_rm_employee_count"]; $i++): ?>
					<?
						$this->AddEditAction($arResult["ITEMS"]["$i"]['ID'], $arResult["ITEMS"]["$i"]['EDIT_LINK'], CIBlock::GetArrayByID($arResult["ITEMS"]["$i"]["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arResult["ITEMS"]["$i"]['ID'], $arResult["ITEMS"]["$i"]['DELETE_LINK'], CIBlock::GetArrayByID($arResult["ITEMS"]["$i"]["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					
					<? if (($i+1)%3 == 1): // 1' из 3 (+--) ?>
						<!-- row -->
						<div class="row">
					<? endif; ?>
					
							<div class="col-sm-4" id="<?= $this->GetEditAreaId($arResult["ITEMS"]["$i"]['ID']); ?>">
										<figure class="thumbnail">
												<a href='<?= $arResult["ITEMS"]["$i"]["PROPERTIES"]["ATEAM"]["VALUE"]; ?>'><img src="<?= $arResult["ITEMS"]["$i"]["PREVIEW_PICTURE"]["SRC"]; ?>" class="img-responsive" alt="Image"></a>
												<figcaption class="caption text-center">
														<h3><?= $arResult["ITEMS"]["$i"]["FIELDS"]["NAME"]; ?> -
																<small><?= $arResult["ITEMS"]["$i"]["PROPERTIES"]["PTEAM"]["VALUE"]; ?></small>
														</h3>
												</figcaption>
										</figure>
								</div>
								<!-- /.col-sm-4 -->
					
					<? if (($i+1)%3 == 0): // 3' из 3 (--+) ?>
						</div>
						<!-- /.row -->
					<? endif; ?>

					<? if ((($i+1)%3 == 1) && (($i+1) == $arResult["own_rm_employee_count"])) : // 1' из 3 (+--) и последний элемент ?>
							<div class="col-sm-4"></div>
							<div class="col-sm-4"></div>
						</div>
						<!-- /.row -->
					<? endif; ?>
					
					<? if ((($i+1)%3 == 2) && (($i+1) == $arResult["own_rm_employee_count"])) : // 2' из 3 (-+-) и последний элемент ?>
							<div class="col-sm-4"></div>
						</div>
						<!-- /.row -->
					<? endif; ?>
					
				<? endfor; ?>
			<? endif; ?>

    </div>
    <!-- /.container -->
</section>
<!-- .team -->
<? endif; ?>
