<?php

namespace KickEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\utils\TextFormat as Color;

class KickEvent extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onKick(PlayerKickEvent $event){
    $player = $event->getPlayer();
    $name = $event->getName();
    
    $player->setKickMessage(Color::DARK_RED."$name You Kick By Admin");
  }
}
