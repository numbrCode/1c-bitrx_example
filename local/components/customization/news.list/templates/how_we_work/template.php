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
	<div class="row">
		<div class="col-md-6 col-sm-12 x-accordion">
			<h3>How we work</h3>
			<div class="panel-group" id="accordionSixLeft">
	
				<? foreach($arResult["ITEMS"] as $key => $arItem): ?>
					<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						//$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));  // Сокрытие кнопки "Удалить" в режиме правки на сайте
					?>
					<?
						switch($key)
						{
							case(0):
								$acollapsed = 'collapsed';
								$aria_expandedname = 'false';
								$idname = 'collapseSixLeftone';
								$classname = 'panel-collapse collapse';
								break;
						case(1):
								$acollapsed = 'collapsed';
								$aria_expandedname = 'false';
								$idname = 'collapseSixLeftTwo';
								$classname = 'panel-collapse collapse';
								break;
						case(2):
								$acollapsed = '';
								$aria_expandedname = 'true';
								$idname = 'collapseSixLeftThree';
								$classname = 'panel-collapse collapse in';
								break;
						}
					?>
				<? if ($key <= 2): ?>
					<div class="panel panel-default" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="panel-heading">
							<h4 class="panel-title"> <a class="<?= $acollapsed; ?>" data-toggle="collapse" data-parent="#accordionSixLeft" href="#<?= $idname; ?>" aria-expanded="<?= $aria_expandedname; ?>"><?= $arItem["NAME"]; ?></a></h4>
						</div>
						<div id="<?= $idname; ?>" class="<?= $classname; ?>" aria-expanded="<?= $aria_expandedname; ?>" style="height: 0px;">
							<div class="panel-body">
								<?= $arItem["PROPERTIES"]["TWORK"]["VALUE"]["TEXT"]; ?>
							</div>
						</div>
					</div>
					 <!-- /.panel-default -->					
				<? endif; ?>
				
			<? if($key == 2): ?>
				</div>
				<!--end of /.panel-group35345345435-->
			</div>
			<!-- .x-aacordion-->
			<? endif; ?>
		<? endforeach; ?>	


			<div class="col-md-6 col-sm-12 tabOne">
					<h3>Why choose our services</h3>
					<div role="tabpanel">
						<!-- Nav tabs -->
						<ul id="tabOne" class="nav nav-tabs nav-justified">
						<? foreach($arResult["ITEMS"] as $key => $arItem): ?>
							<? if ($key > 2): ?>
								<li class="<?= ($key == 3) ? 'active' : ''; ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><a href="#contentOne-<?= ($key-2);?>" data-toggle="tab" aria-expanded="<?= (($key == 3) ? 'true' : 'false'); ?>"><?= $arItem["NAME"]; ?></a></li>
							<? endif; ?>
						<? endforeach; ?>
						</ul>
						
						<!-- Tab panes -->
						<div class="tab-content">
							
							<? foreach($arResult["ITEMS"] as $key => $arItem): ?>
								<? if ($key > 2): ?>
									<div class="<?= ($key == 3) ? 'tab-pane fade active in' : 'tab-pane fade'; ?>" id="contentOne-<?= ($key-2); ?>">
										<?= htmlspecialchars_decode($arItem["PROPERTIES"]["TWORK"]["VALUE"]["TEXT"]); ?>
									</div>
								<? endif; ?>
							<? endforeach; ?>
									
						</div>
						
			</div> <!--.tabpanel-->
	</div>


<? endif; ?>	

