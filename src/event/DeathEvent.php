<?php

namespace DeathEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\utils\TextFormat as Color;

class DeathEvent extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDeath(PlayerDeathEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();
    
    $player->setDeathMessage(Color::RED."$name did");
  }
}
