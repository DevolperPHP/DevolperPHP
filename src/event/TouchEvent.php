<?php

namespace TouchEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat;

class TouchEvent extends PluginBase implements Listener{
  
  public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onTouch(PlayerInteractEvent $event){
	  $player = $event->getPlayer();
	  $block = $event->getBlock()->getId();
	  $name = $player->getName();
	  
	  if($block == id){
	    
	    $player->sendMessage(Color::GREEN."You Touch The Block");
	  }
	}
}
