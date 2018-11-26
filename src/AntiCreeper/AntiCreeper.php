<?php

namespace AntiCreeper;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityExplodeEvent;

class AntiCreeper extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function damageHandler(EntityExplodeEvent $event){
		$event->setCancelled(true);
	}
}
