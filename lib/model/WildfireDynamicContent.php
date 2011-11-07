<?
class WildfireDynamicContent extends WildfireContent{
  
  public $table = "wildfire_content";
  
  public function setup(){
    parent::setup();
    WaxEvent::run("wildfire_dynamic_content.setup", $this);
  }
  
  public function scope($scope){
    $this->asked_for_scope = $scope;
    WaxEvent::run("wildfire_dynamic_content.scope", $this);
    parent::scope($scope);
  }
  
  public function before_save(){
    parent::before_save();
    WaxEvent::run("wildfire_dynamic_content.before_save", $this);
  }
  public function before_insert(){
    parent::before_insert();
    WaxEvent::run("wildfire_dynamic_content.before_insert", $this);
  }
  public function after_save(){
    parent::after_save();
    WaxEvent::run("wildfire_dynamic_content.after_save", $this);
  }
  public function after_insert(){
    parent::after_insert();
    WaxEvent::run("wildfire_dynamic_content.after_insert", $this);
  }
}
?>