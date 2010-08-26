<div class="header-list">
<h1><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Public images archive upload')?></a></h1>
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
<br /><script type="text/javascript">
var translations = {
   'alluploaded' : '<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','All files were uploaded. See album.')?>',    
   'uploading' : '<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Uploading')?>',   
   'complete' : '<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Complete')?>',   
   'choosefilesfirst' : '<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Choose images for upload first.')?>',   
   'fileistobig' : '<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','File is too big.')?>'
};

var swfu;
var fileconverter;

SWFUpload.onload = function () {
	var settings = {
		flash_url : "<?=erLhcoreClassDesign::design('js/swfupload/Flash/swfupload.swf')?>",
		upload_url: "<?=erLhcoreClassDesign::baseurl('/gallery/uploadarchive')?>",
		post_params: {},
		file_size_limit : "<?=(int)(erLhcoreClassModelSystemConfig::fetch('max_archive_size')->current_value/1024)?> MB",
		file_types : "*.zip;",
		file_types_description : "<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Choose one of')?>",
		file_upload_limit : 200,
		file_queue_limit : 20,
		custom_settings : {
			progressTarget : "fsUploadProgress"
		},
		debug: false,

		// Button Settings
		button_text: '<span class="theFont"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Browse')?>...</span>',
		button_text_style: ".theFont { font-size: 19;}",
		button_text_left_padding: 12,
		button_text_top_padding: 3,	
		button_placeholder_id : "spanButtonPlaceholder",
		button_width: 160,
		button_height: 32,
		button_cursor : SWFUpload.CURSOR.HAND, 
		button_action : SWFUpload.BUTTON_ACTION.SELECT_FILES,

		
		// The event handler functions are defined in handlers.js
		swfupload_loaded_handler : swfUploadLoaded,
		file_queued_handler : fileQueued,
		file_queue_error_handler : fileQueueError,
		file_dialog_complete_handler : fileDialogComplete,
		upload_start_handler : uploadStart,
		upload_progress_handler : uploadProgress,
		upload_error_handler : uploadError,
		upload_success_handler : uploadSuccess,
		upload_complete_handler : uploadComplete,
		queue_complete_handler : queueComplete,	// Queue plugin event
		
		// SWFObject settings
		minimum_flash_version : "9.0.28",
		swfupload_pre_load_handler : swfUploadPreLoad,
		swfupload_load_failed_handler : swfUploadLoadFailed
		
	

	};

	swfu = new SWFUpload(settings);	
	fileconverter = new fc(swfu);
}
</script>
 		  
<span id="spanButtonPlaceholder"></span>

<ul style="margin:0;padding:0;">
  <li><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Max file size ')?><?=(int)(erLhcoreClassModelSystemConfig::fetch('max_archive_size')->current_value/1024)?> mb.</li>
</ul>

<br>
<fieldset id="chooseFileLegend"><legend><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Images to upload')?></legend> 
<p id="chooseFile"><?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Choose images for upload.')?></p>

		<div id="divSWFUploadUI">
			<div class="fieldset flash" id="fsUploadProgress">	
			
			</div>	
		</div>
		
</fieldset>
<br>

<input type="button" onclick="fileconverter.startUpload()" disabled="disabled" class="default-button" id="ConvertButton" value="<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Upload')?>" />

<div id="content">
	
		<div id="divLoadingContent" class="content" style="background-color: #FFFF66; border-top: solid 4px #FF9966; border-bottom: solid 4px #FF9966; margin: 10px 25px; padding: 10px 15px; display: none;">
			<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Image upload is in progress. Please wait a moment...')?>
		</div>
		
		<div id="divLongLoading" class="content" style="background-color: #FFFF66; border-top: solid 4px #FF9966; border-bottom: solid 4px #FF9966; margin: 10px 25px; padding: 10px 15px; display: none;">			
			<?=erTranslationClassLhTranslation::getInstance()->getTranslation('gallery/publicupload','Image upload is taking a long time to load or the load has failed.  Please make sure that the Flash Plugin is enabled and that a working version of the Adobe Flash Player is installed.')?>
		</div>
		
			
	
</div>



