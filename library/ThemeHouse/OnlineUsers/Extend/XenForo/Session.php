<?php
if (false) {

    class XFCP_ThemeHouse_OnlineUsers_Extend_XenForo_Session extends XenForo_Session
    {
    }
}

class ThemeHouse_OnlineUsers_Extend_XenForo_Session extends XFCP_ThemeHouse_OnlineUsers_Extend_XenForo_Session
{

    public function __construct(array $config = array(), Zend_Cache_Core $cache = null, Zend_Db_Adapter_Abstract $db = null)
    {
        $xenOptions = XenForo_Application::get('options');
        
        if ($xenOptions->th_onlineUsers_extendSessionExpiry) {
            if (!empty($config['admin'])) {
                $lifetime = (XenForo_Application::debugMode() ? 86400 : 3600);
            } else {
                $lifetime = 3600;
            }
            
            $config['lifetime'] = max($lifetime, $xenOptions->onlineStatusTimeout);
        }
        
        parent::__construct($config, $cache, $db);
    }
}