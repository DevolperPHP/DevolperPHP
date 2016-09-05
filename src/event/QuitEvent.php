<?php

namespace QuitEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\TextFormat as Color;

class QuitEvent extends PluginBase implements Listener{
  
  public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onQuit(PlayerQuitEvent $event){
	  $player = $event->getPlayer();
	  $name = $player->getName();
	  
	  $player->setQuitMessage(Color::YELLOW."$name Left The Server");
	}
}
