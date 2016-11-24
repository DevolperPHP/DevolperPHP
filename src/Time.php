<?php

namespace Time;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\utils\TextFormat as Color;

class Main extends PluginBase implements Listener{
  
  public $players = 0;
  public $minute = 0;
  public $second = 60; # you can change second in public not in time function
  public $counttype = "down"; # you can change counttype down or up
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(Color::GREEN."JUZEXMOD Plugin is ON");
  }
  
  public function tick(){
    
    if($this->counttype == "down"){
      $this->second--;
      
      if($this->second < 60 && $this->second > 9){ # this not time don't change this
        $p->sendTip($this->minute.":".$this->second);
      }
      
      if($this->second < 10){
        $p->sendTip($this->minute.":0".$this->second);
        
        if($this->second == 0){
          $this->second = 60;
				  $this->minute--;
      }
    }
  }
    
    public function onMove(PlayerMoveEvent $event){
		$player = $event->getPlayer();
		
			$event->setCancelled(true);
			
			if($this->second < 0 && $this->second > 0){ # on set time 0 happens ...
				$event->setCancelled(false);
		}
	}
}
  
  # you can use time an all functions
