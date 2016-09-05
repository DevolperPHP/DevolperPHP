<?php

namespace Effect;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;

class Effect extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'cmd':
        $Effect = Effect::getEffect(2);  /* Efeect id */
        $effect->setAmplifier(2);    /* Effect Power */
        $effect->setVisible(true);
        $effect->setDuration(10000000000);  /* Effect Time */
        $sender->addEffect($effect);
    }
  }
}
