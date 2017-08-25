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

    public $second = 30;
    public $muinit = 1;
    public $timer = false;

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("$this->prefix §bis §aEnable.");
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Time($this), 20);
        $this->saveDefaultConfig();
        $this->reloadConfig();
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        switch ($command->getName()){

            case 'setworld':
                $world = $sender->getLevel()->getName();
                $this->getConfig()->set("world", $world);
                $this->getConfig()->save();
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

    public function onClick(PlayerInteractEvent $event){
        $p = $event->getPlayer();
        $block = $event->getBlock()->getId();
        $level = $p->getLevel()->getName();

        if($block == 152){
            if ($level == $this->getConfig()->get("world")){
                $this->timer = true;
            }
        }
    }

    public function onMove(PlayerMoveEvent $event){
        $p = $event->getPlayer();

        $event->setCancelled(true);
    }
}
