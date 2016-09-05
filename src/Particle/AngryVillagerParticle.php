<?php

namespace AngryVillagerParticle;

use pocketmine\plugin\PluginBase;
use pocketmine\level\particle\AngryVillagerParticle;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class AngryVillagerParticle extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'particle':
        $sender->getLevel()->addParticle(new AngryVillagerParticle($sender))
    }
  }
}
