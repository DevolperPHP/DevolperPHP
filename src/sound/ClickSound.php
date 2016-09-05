<?php
namespace ClickSound;

use pocketmine\plugin\PluginBase;
use pocketmine\level\sound\ClickSound;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class ClickSound extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on")
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'sound':
        $sender->getLevel()->addSound(new ClickSound($sender));
    }
  }
}
