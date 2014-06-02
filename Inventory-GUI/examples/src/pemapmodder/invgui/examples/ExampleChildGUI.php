<?php

namespace pemapmodder\invgui\examples;

use pemapmodder\invgui\InvGui;
use pocketmine\Player;

class ExampleParentGUI extends InvGui{
	public function getID(){
		return InvGui::calcId(WOOL, 7);
	}
	public function getInheritance(){
		return array(InvGui::calcId(WOOL, 5));
	}
	public function onClicked(Player $player){
		$player->sendChat("You clicked ExampleChildGUI!");
		return true;
	}
	public function isParent(){
		return false;
	}
}