<?php
if (false) {

    class XFCP_ThemeHouse_OnlineUsers_Extend_XenForo_Model_Session extends XenForo_Model_Session
    {
    }
}

class ThemeHouse_OnlineUsers_Extend_XenForo_Model_Session extends XFCP_ThemeHouse_OnlineUsers_Extend_XenForo_Model_Session
{
    
    /**
     *
     * @see XenForo_Model_Session::deleteSessionActivityOlderThanCutOff()
     */
    public function deleteSessionActivityOlderThanCutOff($cutOffDate)
    {
        $xenOptions = XenForo_Application::get('options');

        
        if ((XenForo_Application::$time - $cutOffDate) == 3600) {
            $cutOffDate = XenForo_Application::$time - max(3600, $xenOptions->onlineStatusTimeout * 60);
        }
        
        parent::deleteSessionActivityOlderThanCutOff($cutOffDate);
    }
}