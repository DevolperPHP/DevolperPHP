<?php

namespace MoveEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\utils\TextFormat as Color;

class MoveEvent extends PluginBase implements Listener{
  
  public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onMove(PlayerMoveEvent $event){
	  $player = $event->getPlayer();
	  $name = $player->getName();
	  
	  $player->sendPopup(Color::AQUA."Welcome $name");
	}
}
