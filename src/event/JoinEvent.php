<?php

namespace JoinEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as Color;

class JoinEvent extends PluginBase implements Listener{
  
  public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();
    
    $player->setJoinMessage(Color::GREEN."$name Join The Server");
  }
}
