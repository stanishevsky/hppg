<div class="header-list">
<div class="right order-nav">
    <a class="da<?=$mode == 'newdesc' ? ' selor' : ''?>" href="<?=$album->url_path?>"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Last uploaded first')?></a>
    <a class="ar<?=$mode == 'newasc' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/newasc"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Last uploaded last')?></a>    
    <a class="da<?=$mode == 'popular' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/popular"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Most popular first')?></a>
    <a class="ar<?=$mode == 'popularasc' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/popularasc"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Most popular last')?></a>
    <a class="da<?=$mode == 'lasthits' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/lasthits"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Last hits first')?></a>
    <a class="ar<?=$mode == 'lasthitsasc' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/lasthitsasc"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Last hits last')?></a>
    <a class="da<?=$mode == 'toprated' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/toprated"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Top rated first')?></a>
    <a class="ar<?=$mode == 'topratedasc' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/topratedasc"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Top rated last')?></a>    
    <a class="da<?=$mode == 'lastcommented' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/lastcommented"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Last commented first')?></a>
    <a class="ar<?=$mode == 'lastcommentedasc' ? ' selor' : ''?>" href="<?=$album->url_path?>/(sort)/lastcommentedasc"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','Last commented last')?></a>
</div>
<h1><?=htmlspecialchars($album->title)?></h1>
</div>
<? if ($pages->items_total > 0) { ?>         
  <?  
      $items = erLhcoreClassModelGalleryImage::getImages(array('sort' => $modeSQL,'cache_key' => 'albumlist_'.CSCacheAPC::getMem()->getCacheVersion('album_'.$album->aid),'filter' => array('aid' => $album->aid),'offset' => $pages->low, 'limit' => $pages->items_per_page));
  ?>      
  <?php include_once(erLhcoreClassDesign::designtpl('lhgallery/image_list.tpl.php'));?>           
<? } else { ?>

<p><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/album','No records')?>.</p>

<? } ?>

