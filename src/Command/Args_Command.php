<?php

namespace Args_Command;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;

class Args_Command extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin as On");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'cmd':
        
        if(isset([$args[0]])){
          switch($args[0]){
            
            case 'msg1':
              $sender->sendMessage(Color::GREEN."Hi");
              return true;
            case 'msg2':
              $sender->sendMessage(Color::GREEN."welcome");
          }
        }
    }
  }
}

/*
plugin.yml:

name: Args_Command
author: JUZEXMOD
main: Args_Command\Args_Commmand
version: 1.0
api: [2.0.0]

commands
  cmd:
    descriptionL cmd Command
*/
