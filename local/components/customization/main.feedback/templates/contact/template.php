<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>

<? if (false): ?>
					<div class="mfeedback">
					<?if(!empty($arResult["ERROR_MESSAGE"]))
					{
						foreach($arResult["ERROR_MESSAGE"] as $v)
							ShowError($v);
					}
					if(strlen($arResult["OK_MESSAGE"]) > 0)
					{
						?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
					}
					?>
					
					<form action="" method="POST">
					<?=bitrix_sessid_post()?>
						<div class="mf-name">
							<div class="mf-text">
								<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
							</div>
							<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
						</div>
						<div class="mf-email">
							<div class="mf-text">
								<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
							</div>
							<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
						</div>
					
						<div class="mf-message">
							<div class="mf-text">
								<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
							</div>
							<textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
						</div>
						<?foreach($arParams["NEW_EXT_FIELDS"] as $i => $ext_field):?>		
							<div class="mf-name">
								<div class="mf-text">
									<?=$ext_field?>
								</div>
								<input type="text" name="custom[<?$i?>]" value="<?=$arResult["custom_$i"]?>">
							</div>
						<?endforeach;?>
						<?if($arParams["USE_CAPTCHA"] == "Y"):?>
						<div class="mf-captcha">
							<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
							<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
							<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
							<input type="text" name="captcha_word" size="30" maxlength="50" value="">
						</div>
						<?endif;?>
						<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
					</form>
					</div>
<? endif; ?>


<div class="row">
		<div class="col-md-8 col-md-offset-2">
				
				<? if(!empty($arResult["ERROR_MESSAGE"]))
				{
					foreach($arResult["ERROR_MESSAGE"] as $v)
						ShowError($v);
				}
				if(strlen($arResult["OK_MESSAGE"]) > 0)
				{
				?>
				<div class="mf-ok-text"><?= $arResult["OK_MESSAGE"]; ?></div>
				<?
				}
				?>	
				
				<form action="" method="POST">
				<?=bitrix_sessid_post()?>
						<div class="row">
								<div class="col-md-6">
										<div class="form-group user-name">
												<label for="nameFive-first" class="sr-only">Name</label>
												<input type="text" class="form-control" required id="nameFive-first" placeholder="First Name" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
										</div>

										<div class="form-group user-email">
												<label for="emailFive" class="sr-only">Email</label>
												<input type="email" class="form-control" required id="emailFive" placeholder="Email Address" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
										</div>

										<div class="form-group user-phone">
												<label for="websiteOne" class="sr-only">Website</label>
												<input type="text" class="form-control" id="websiteOne" placeholder="Phone" name="custom['0']" value="<?= $arResult["custom_0"]; ?>">
															<?//foreach($arParams["NEW_EXT_FIELDS"] as $i => $ext_field):?>
										</div>
								</div><!-- /.col-md-6 -->

								<div class="col-md-6">
										<div class="form-group user-message">
												<label for="messageOne" class="sr-only">Message</label>
												<textarea class="form-control" required id="messageOne" placeholder="Write Message" name="MESSAGE" <?= $arResult["MESSAGE"]; ?>></textarea>
										</div>
								</div><!-- /.col-md-6 -->
						</div><!-- /.row-->
						
						<?if($arParams["USE_CAPTCHA"] == "Y"):?>
						<div class="mf-captcha">
							<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
							<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
							<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
							<input type="text" name="captcha_word" size="30" maxlength="50" value="">
						</div>
						<?endif;?>
					
						<button type="submit" class="btn btn-primary" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">Send Message</button>
				</form>
		</div><!-- /.col-md-8 -->
</div>
