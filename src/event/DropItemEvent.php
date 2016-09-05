<?php

namespace DropItemEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItem;
use pocketmine\utils\TextFormat as Color;

class DropItemEvent extends PluginBase implements Listener{
  
  public function onEnabel(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onItemDrop(PlayerDropItemEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        $item = $event->getItem()->getId();
        
        if($item == id){
          $player->sendMessage(Color::GREEN."Hi");
        }
}
