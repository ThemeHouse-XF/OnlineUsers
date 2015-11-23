<?php

class ThemeHouse_OnlineUsers_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_OnlineUsers' => array(
                'model' => array(
                    'XenForo_Model_Option',
                    'XenForo_Model_Session'
                ),
                'session' => array(
                    'XenForo_Session'
                ),
            ),
        );
    }

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_OnlineUsers_Listener_LoadClass', $class, $extend, 'model');
    }

    public static function loadClassSession($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_OnlineUsers_Listener_LoadClass', $class, $extend, 'session');
    }
}