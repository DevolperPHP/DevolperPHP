<?php

namespace DataPackReceiveEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat as Color;

class DataPacketReceiveEvent extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onPackReceiveEvent(DataPackReceiveEvent $event){
    $player = $event->getPlayer();
    $item = $player->getInventory()->getItemInHand()->getId();
    
    if($item == id){
      $player->sendTip("Hellow");
    }
  }
}
