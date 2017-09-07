<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if ($arResult): ?>
	<ul class="list-inline social-links">
		<? foreach($arResult as $arItem): ?>
			<li><a href="<?= $arItem["LINK"]; ?>" class='<?= $arItem["PARAMS"]['CLASS']; ?>'></a></li>
		<? endforeach; ?>
	</ul>
<? endif; ?>