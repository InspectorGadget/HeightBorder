<?php

namespace FWAcoreclasses;

use pocketmine\scheduler\PluginTask;
use joincommands\Main;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;

class LoginTask extends PluginTask implements Listener{
  
  private $plugin;
  private $p;
  public function __construct(EventListener $plugin, Player $p) {
    parent::__construct($plugin);
    $this->plugin = $plugin;
    $this->player = $p;
  }
  
  public function getPlugin() {
    return $this->plugin;
  }
  
  public function onRun($tick) {
<?php
namespace FWAcoreclasses;
use pocketmine\scheduler\PluginTask;
use PocketRPG\eventlistener\EventListener;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\level\particle\HugeExplodeParticle;
class ExplodeTask extends PluginTask implements Listener{
  
  private $plugin;
  private $p;

  public function __construct(EventListener $plugin, Player $p) {
    parent::__construct($plugin);
    $this->plugin = $plugin;
    $this->player = $p;
  }
  
  public function getPlugin() {
    return $this->plugin;
  }
  
  public function onRun($tick) {
    $this->getPlugin ()->getServer ()->dispatchCommand(new ConsoleCommandSender (), "rca " . $p->getName () . " sb on");
    $this->getPlugin ()->getServer ()->dispatchCommand(new ConsoleCommandSender (), "walkp clear " . $p->getName ());
  }
}