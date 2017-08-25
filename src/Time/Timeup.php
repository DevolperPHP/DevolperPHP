<?php

namespace Time;

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\block\Block;
use pocketmine\level\Level;
use pocketmine\tile\Sign;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

    public $prefix = "§l§6[Time]";

    public $second = 0;
    public $timer = false;

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("$this->prefix §bis §aEnable.");
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Time($this), 20);
        $this->saveDefaultConfig();
        $this->reloadConfig();
    }

    public function time()
    {
        $all = $this->getServer()->getOnlinePlayers();

        foreach ($all as $p) {

            if ($this->timer == true) {

                $this->second++;

                $p->sendTip("$this->prefix Time : $this->second");   
                
                if($this->second == 10){
                $p->sendMessage("Hellow")
                }
        }
    }
}
