<?php

namespace World;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\level\Position;
use pocketmine\utils\TextFormat as Color;
use pocketmine\utils\Config;

class World extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info(Color::GREEN."Plugin Is On");
		@mkdir($this->getDataFolder());
		$worlds = [
		
				'world' => 'world',
		
		];
		$cfg = new Config($this->getDataFolder() . "config.yml", Config::YAML,$worlds);
		$cfg->save();
	}
	
	public function onDisable(){
		$this->getConfig()->save();
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $lable, array $args){
		switch($cmd->getName()){
			case 'setworld':
				$world = $sender->getLevel()->getName();
				$this->getConfig()->set("world", $world);
        $sender->sendMessage("World Name $world");
        break;
        
      case 'tp':
        $world = $this->getConfig()->get("world");
        $player->teleport($this->getServer()->getLevelbyName("$world")->getSafeSpawn());
		}
	}
}
