<?php

class erLhcoreClassShop{
      
   function __construct()
   {
 
   }
   
   public static function getSession()
   {
        if ( !isset( self::$persistentSession ) )
        {            
            self::$persistentSession = new ezcPersistentSession(
                ezcDbInstance::get(),
                new ezcPersistentCodeManager( './pos/lhshop' )
            );
        }
        return self::$persistentSession;
   }
           
   private static $persistentSession;

}


?>