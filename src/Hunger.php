<?php

namespace Hunger;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Hunger extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin Is On");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'food':
        $sender->setFood(20);
    }
  }
}
