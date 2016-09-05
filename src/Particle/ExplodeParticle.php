<?php

namespace ExplodeParticle;

use pocketmine\plugin\PluginBase;
use pocketmine\level\particle\ExplodeParticle;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;

class ExplodeParticle extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'particle':
        $sender->getLevel()->addParticle(new Explode($sender))
    }
  }
}
