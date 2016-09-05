<?php

namespace SignChangeEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat as Color;

class SignChangeEvent extends PluginBase implements Listener{
  
  public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onSignChange(SignChangeEvent $event){
	  $sign = $event->setLine();
	  $player = $event->getPlayer();
	  $name = $player->getName();
	  
	  if(strtolower(trim($event->()getLine(0))) == "Hi" || strtolower(trim($event->getLine(0))) == "[HI]"){
	  	$sign(0, "[Hi]");
	  	$sign(1, "Hellow $name");
	  	$sign(2, "Welcome");
	  	$sign(3, "DevolperPHP
	  	
	  	$player->sendMessage("Hi");
	  }
	}
}
