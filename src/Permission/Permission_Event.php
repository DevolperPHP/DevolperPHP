<?php

namespace Permission_Event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\permission\permission;
use pocketmine\utils\TextFormat as Color;

class Permission_Event extends PluginBase implements Listener{
  
  public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onJoin(PlayerJoinEvent $event){
	  $player = $event->getPlayer();
	  $name = $player->getName();
	  
	  if($player->hasPermission("permission.join")){
	    $player->setJoinMessage(Color::GREEN."$name Join The Server !!!");
	  } else {
	    $player->setJoinMessage(Color::YELLOW."$name Join The Server");
	  }
	}
}
