<?php
namespace Command;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;
class CommandSender extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($cmd->getName() == 'cmd'){
      switch(mt_rand(1,3)){
        case 1:
          $sender->sendMessage("Hi");
          break;
        case 2:
          $sender->sendMessage("Welcome");
          break;
        case 3:
          $sender->sendMessage("Hellow");
      }
    }
  }
}
