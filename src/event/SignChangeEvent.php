<?php

namespace SignChangeEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat as Color;

class SignChangeEvent extends PluginBase implements Listener{
  
  public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onSignChange(SignChangeEvent){
	  $sign = $event->setLine();
	  $player = $event->getPlayer();
	  
	  $sign(0,"Hi");
	  $sign(1,"$event->getName()");
	  $sign(2,"Enjoy =)");
	  
	  $player->sedMessage("You Touch The Sign");
	}
}
