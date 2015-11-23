<?php
if (false) {

    class XFCP_ThemeHouse_OnlineUsers_Extend_XenForo_Model_Option extends XenForo_Model_Option
    {
    }
}

class ThemeHouse_OnlineUsers_Extend_XenForo_Model_Option extends XFCP_ThemeHouse_OnlineUsers_Extend_XenForo_Model_Option
{
    
    public function prepareOption(array $option)
    {
        if ($option['option_id'] == 'onlineStatusTimeout') {
            $option['edit_format_params'] .= "\nmax=";
        }
        
        return parent::prepareOption($option);
    }
}