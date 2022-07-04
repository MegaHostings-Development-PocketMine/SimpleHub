<?php

namespace HS\Commands;

use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as MG;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
use pocketmine\Server;
use pocketmine\utils\Config;

class HubCommand extends Command {
  
  public function __construct(){
    parent::__construct("hub", "hub command", null, ["spawn"]);
  }
  
  public function execute(CommandSender $pl, string $label, array $args){
    if($pl instanceof Player){
        $pl->teleport($pl->getServer()->getWorldManager()->getDefaultWorld()->getSafeSpawn());
        $pl->getInventory()->clearALL();
        $pl->getArmorInventory()->clearALL();
        $pl->sendMessage($this->getConfig()->get("Hub-Message"));
       }
    }
}