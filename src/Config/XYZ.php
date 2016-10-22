<?php

namespace XYZ;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\level\Position;
use pocketmine\utils\TextFormat as Color;
use pocketmine\utils\Config;

class XYZ extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info(Color::GREEN."Plugin Is On");
		@mkdir($this->getDataFolder());
		$xyz = [
		
				'x' => 0,
				'y' => 0,
				'z' => 0,
		
		];
		$cfg = new Config($this->getDataFolder() . "config.yml", Config::YAML,$xyz);
		$cfg->save();
	}
	
	public function onDisable(){
		$this->getConfig()->save();
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $lable, array $args){
		switch($cmd->getName()){
			case 'pos1':
				$x = $sender->getFloorX();
				$y = $sender->getFloorY();
				$z = $sender->getFloorZ();
				
				$this->getConfig()->set("x", $x);
				$this->getConfig()->set("y", $y);
				$this->getConfig()->set("z", $z);
				break;
				
			case 'tp':
				$x = $this->getConfig()->get("x");
				$y = $this->getConfig()->get("y");
				$z = $this->getConfig()->get("z");
				
				$sender->teleport(new position($x, $y, $z));
		}
	}
}
