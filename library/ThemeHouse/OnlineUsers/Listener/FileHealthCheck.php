<?php

class ThemeHouse_OnlineUsers_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/OnlineUsers/Extend/XenForo/Model/Option.php' => '3692273984944ab9ffd43873d9970273',
                'library/ThemeHouse/OnlineUsers/Extend/XenForo/Model/Session.php' => '85885066cba60b6969e1caac46bfc12e',
                'library/ThemeHouse/OnlineUsers/Extend/XenForo/Session.php' => '9490b97fee8f0c9fd310a5346e705aad',
                'library/ThemeHouse/OnlineUsers/Install/Controller.php' => 'a809665d473866079ce1ed1352fa06bb',
                'library/ThemeHouse/OnlineUsers/Listener/LoadClass.php' => 'b163f8be6df99f2f7465dbdf75f08fc5',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}