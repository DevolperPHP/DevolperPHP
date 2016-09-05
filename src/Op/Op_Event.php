<?php

namespace Op_Event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\level\particle\HeartParticle;

class Op_Event extends PluginBase implements Listener(){
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onMove(PlayerMoveEvent $event){
    $player = $event->getPlayer();
    
    if($player->isOp()){
      $player->getLevel()->addParticle(new HeartParticle($player));
    }
  }
}
