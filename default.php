<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2014 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/

// Define the plugin:


$PluginInfo['VRadio'] = array(
   'Name'=>'VRadio',
   'Description' => "This plugin adds RadioTuna radio widget from radiotuna.com where you can add or change radio stations for the radio and edit it's colors to match your theme. ",
   'Version' => '1.1',
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class VRadio_Plugin extends Gdn_Plugin {

  public function __construct() {
      
   }

  
  

	

public function Base_Render_Before($Sender) {
    $Controller = $Sender->ControllerName;
  $ShowOnController = array(
          'discussioncontroller',
          'categoriescontroller',
          'discussionscontroller',
          'profilecontroller',
          'activitycontroller'
        );
   if (!InArrayI($Controller, $ShowOnController)) return;

 $Sender->AddCssFile('vradio.css', 'plugins/VRadio');
$VRadioModule = new VRadioModule($Sender);
      $Sender->AddModule($VRadioModule);
   }






   public function Setup() {
    
   }


     public function OnDisable() {
      return TRUE;
   }

}


	
        	   
