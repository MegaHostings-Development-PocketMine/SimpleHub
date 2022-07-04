<?php

namespace HS;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as MG;
use pocketmine\utils\Config;

#uses by JuanantonioVYT#
use HS\Commands\HubCommand;
use HS\Commands\CodeUtil;

class Loader extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getLogger()->info("HubSystem enabled");
        $this->getLogger()->info("Lobbys: 1");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getCommandMap()->register("/hub", new HubCommand($this));
        $this->saveDefaultConfig();
    }

    public function onDisable(): void {
    }
}