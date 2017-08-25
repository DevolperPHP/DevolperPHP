<?php

namespace Time;

use pocketmine\utils\TextFormat;
use pocketmine\tile\Sign;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;

class Time extends PluginTask{

    public function __construct(Main $plugin){
        parent::__construct($plugin);
        $this->plugin = $plugin;
    }

    public function onRun($currentTick){
        $this->plugin->time();
    }
}
