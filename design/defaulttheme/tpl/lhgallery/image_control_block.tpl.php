<div class="float-break control-block" style="clear:both">

<div class="left">
<a class="ad-fv" title="<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/image','Add to favorites')?>"></a>
<a class="ad-html" href="/gallery/sharehtml/<?=$image->pid;?>" title="<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/image','Share this page HTML code')?>"></a>
<a class="ad-phpbb" href="/gallery/sharephpbb/<?=$image->pid;?>" title="<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/image','Share PHPBB code')?>"></a>
</div>

<div class="right">
<?if ($image->owner_id == 1 || $image->owner_id == 0) : ?>
<div class="act-blc" id="tags-container">
<input type="text" id="IDtagsPhoto" value="" class="inputfield" title="<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/image','Enter tags separated by space')?>" /> <input type="button" onclick="hw.tagphoto(<?=$image->pid;?>)" class="default-button" value="tag it!" /> <i>Tag this photo</i>
</div>
<?endif;?>
</div>

</div>