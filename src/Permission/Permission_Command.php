<?php

namespace Permission_Command;

use pocketmine\plugin\PluginBase;
use pocketmine\permission\Permission;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;

class Permission_Command extends PluginBase{
  
  public function onEnable(){
		$this->getServer()->getLogger()->info(Color::GREEN."Plugin is on");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label array $args){
	  switch($cmd->getName()){
	    case 'cmd':
	      if($sender->hasPermission("permission.cmd")){
	        $sender->sendMessage("Hi");
	      } else {
	        $sender->sendMessage(Color::RED."You Not Have Permission");
	      }
	  }
	}
}
