<?php if (!defined('APPLICATION')) exit();

class VRadioModule extends Gdn_Module {
   
 


   public function AssetTarget() {
      return 'Panel';
   }

   public function ToString() {  
     
      echo '<div id="VRadio" class="Box"><a id="onlineRadioLink" href="http://radiotuna.com/alternative-rock-radio">alternative rock radio</a>
      <script type="text/javascript" src="http://radiotuna.com/OnlineRadioPlayer/EmbedRadio?playerParams=%7B%22styleSelection0%22%3A96%2C%22styleSelection1%22%3A29%2C%22styleSelection2%22%3A253%2C%22textColor%22%3A0%2C%22backgroundColor%22%3A16777215%2C%22buttonColor%22%3A8841214%2C%22glowColor%22%3A8841214%2C%22playerSize%22%3A240%2C%22playerType%22%3A%22style%22%7D&width=240&height=292"></script></div>';


    //If you copy paste new code for the radio make sure you do it in between the < div >tags
    
   }
}
