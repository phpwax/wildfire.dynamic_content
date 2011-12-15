<?
class WildfireDynamicContent extends WildfireContent{
  
  public $table = "wildfire_content";
  
  public function setup(){
    parent::setup();
    WaxEvent::run(get_class($this).".setup", $this);
  }
  
  public function scope($scope){
    $this->asked_for_scope = $scope;
    WaxEvent::run(get_class($this).".scope", $this);
    return parent::scope($scope);
  }
  
  public function before_save(){
    parent::before_save();
    WaxEvent::run(get_class($this).".before_save", $this);
  }
  public function before_insert(){
    parent::before_insert();
    WaxEvent::run(get_class($this).".before_insert", $this);
  }
  public function after_save(){
    parent::after_save();
    WaxEvent::run(get_class($this).".after_save", $this);
  }
  public function after_insert(){
    parent::after_insert();
    WaxEvent::run(get_class($this).".after_insert", $this);
  }
}
?>