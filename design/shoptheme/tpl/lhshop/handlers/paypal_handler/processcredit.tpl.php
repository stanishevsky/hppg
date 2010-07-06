<div class="header-list">
<h1><?=erTranslationClassLhTranslation::getInstance()->getTranslation('paypal_handler/process','Checkout using Paypal');?></h1>
</div>

<form action="<?=erLhcoreClassDesign::baseurl('/shop/processcredits/paypal_handler')?>" method="post" name="ExpressCheckoutForm">
	<input type=hidden name=paymentType value=Sale>	
    <table class="api" align="left">        
	<tr>
		<td align=right><?=erTranslationClassLhTranslation::getInstance()->getTranslation('paypal_handler/process','Buyer\'s Email');?>:</td>
		<td align=left><?=$basket->user->email?>
		<input type="hidden" name="buyersemail" value="<?=$basket->user->email?>">		
		</td>
	</tr>
	<tr>
		<td align=right><?=erTranslationClassLhTranslation::getInstance()->getTranslation('paypal_handler/process','Amount');?></td>
    	<td align=left>
    		<?=$basket->amount?>        						
    	</td>
    </tr>
    <tr>
		<td align=right><?=erTranslationClassLhTranslation::getInstance()->getTranslation('paypal_handler/process','Credits');?></td>
    	<td align=left>
    		<?=$basket->credits?>        						
    	</td>
    </tr>
    <tr>
        <td class="field" align=right>
            <?=erTranslationClassLhTranslation::getInstance()->getTranslation('paypal_handler/process','Currency')?>:</td><td><input type="hidden" name="currencyCodeType" value="<?=$payment_handler->basket->order->currency?>" /> <?=$payment_handler->basket->order->currency?>
        </td>
    </tr>        
        <td>   
            <br />
            <input type="image" name="ProcessCheckout" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" />
        </td>
        <td>
        </td>
    </tr>
    </table>
</form>