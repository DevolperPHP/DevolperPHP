<?php

namespace BlockBreakEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat as Color;

class BlockBreak extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onBreak(BlockBreakEvent $event){
    $player = $event->getPlayer();
    $block = $event->getBlock()->getId();
    
    if($block == id){
      $player->sendMessage("You Break This Block");
    }
  }
}
