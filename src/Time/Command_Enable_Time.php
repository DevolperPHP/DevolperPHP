<?php

namespace Time;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

    public $prefix = "§l§6[Time]";

    public $second = 30;
    public $muinit = 1;
    public $timer = false;

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("$this->prefix §bis §aEnable.");
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Time($this), 20);
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        switch ($command->getName()){

            case 'timeon':
                $this->timer = true
        }
    }

    public function time()
    {
        $all = $this->getServer()->getOnlinePlayers();

        foreach ($all as $p) {

            if ($this->timer == true) {

                $this->second--;

                $p->sendTip("$this->prefix Time : $this->second : $this->muinit");

                if ($this->second == 0) {
                    $this->second = 0 + 60;
                    $this->muinit--;
                }

                if($this->muinit == -1){
                    $p->sendMessage("hellow");
                    $this->timer = false;
                }
            }
        }
    }

}
