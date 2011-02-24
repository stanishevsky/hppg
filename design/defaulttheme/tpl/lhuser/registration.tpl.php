<div class="header-list">
<h1><?=erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','Registration')?></h1>
</div>
<? if (isset($errArr)) : ?>
<div class="error-list">
<br />

<ul>
<?php foreach ($errArr as $err) : ?>
    <li><?=$err?></li>
<?php endforeach;?>
</ul>
</div>
<? endif;?>
<br />


<div class="right" style="padding-right:300px;">
<h2>OR login with</h2>
<a href="<?=erLhcoreClassDesign::baseurl('user/loginwithgoogle')?>" title="Login with google account" ><img src="<?=erLhcoreClassDesign::design('images/icons/open_id_1.png')?>" alt="" title="" /></a>
</div>


<form method="post" action="<?=erLhcoreClassDesign::baseurl('user/registration')?>">
<div class="in-blk">
<label><?=erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','Username');?></label>
<input class="inputfield" type="text" name="Username" value="<?=htmlspecialchars($user->username);?>" />
</div>

<div class="in-blk">
<label><?=erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','Password');?></label>
<input type="password" class="inputfield" name="Password" value=""/>
</div>


<div class="in-blk">
<label><?=erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','Repeat password');?></label>
<input type="password" class="inputfield" name="Password1" value=""/>
</div>

<div class="in-blk">
<label><?=erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','E-mail');?></label>
<input type="text" class="inputfield" name="Email" value="<?=$user->email;?>"/>
</div>

<div class="in-blk">
<label><?=erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','Safe code')?></label>
<input type="text" class="inputfield" name="CaptchaCode" value="" /><br />
<img src="<?=erLhcoreClassDesign::baseurl('captcha/image')?>/feedback_form" alt="">
</div>

<input type="submit" class="default-button" name="Update_account" value="<?=erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','Register')?>"/>

</form>