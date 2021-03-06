<?php

class erLhcoreClassShop{
      
   function __construct()
   {
 
   }
        
   public static function getSession($type = false)
   {                
        if ($type === false && !isset( self::$persistentSession ) )
        {
            self::$persistentSession = new ezcPersistentSession(
                ezcDbInstance::get(),
                new ezcPersistentCodeManager( './pos/lhshop' )
            );
        } elseif ($type !== false && !isset( self::$persistentSessionSlave ) ) {            
            self::$persistentSessionSlave = new ezcPersistentSession(
                ezcDbInstance::get($type),
                new ezcPersistentCodeManager( './pos/lhshop' )
            );
        }
        
        return $type === false ? self::$persistentSession : self::$persistentSessionSlave;        
   }
   
   private static $persistentSession;
   
   // For selects
   private static $persistentSessionSlave;

}


?>