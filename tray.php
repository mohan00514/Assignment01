<?php
include("folder.php");

class FolderTray{
    private $arr;
    public $top;
    
    public function __construct(){
        $this->top = -1;
        $this->arr = array();
    }
     
    public function setArr($arr): self {
		$this->arr = $arr;
		return $this;
	}

    public function getArr() {
		return $this->arr;
	}

    public function push($item) {
        $this->top++;
        $this->arr[$this->top] = $item;
        return $item;
       
       

    }
    
    public function pop() {
        if($this->top < 0){
          echo "Stack is empty. \n";
        } else {
           
            $x =array_pop($this->arr);
            return $x;
           
        }    
    }

}
	
$tray1 =new FolderTray();
$tray1->push("folder1");
$tray1->push("folder2");
$tray1->push("folder3");
echo "<pre>";
print_r($tray1->getArr());
echo "<pre>";
echo "<br/>";
$tray1->pop();
$tray1->pop();
echo "<br/>";
echo "<pre>";
print_r($tray1->getArr());
echo "<pre>";
//echo "<br/>";

 
