<?php

class File {
      
    private $fileNumber;
    private $fileName;
    private $created_Date;
    private $content; 
   
    function __construct( $fileNumber,$fileName,$created_Date,$content) {
      
      $this->fileNumber = $fileNumber;
      $this->fileName = $fileName;
      $this->created_Date = $created_Date;
      $this->content = $content;
    }
    
   // set Folder Number
  public function set_file_number($fileNumber){
     
      $this->fileNumber = $fileNumber;
     
  }
  // get file Number
  public function get_folder_name(){
      return 'file number is'. $this->fileNumber;
  }
  
  // set Name of File
  public function set_file_name($fileName){
     
      $this->fileName = $fileName;
     
  }
  // get name of file
  public function get_file_name(){
      return  $this->fileName;
  }
  
  // set created date of file
  public function set_date( $created_Date){
      $this->created_Date =  $created_Date;
  }
  
  // get owner of folder
  public function get_date(){
      return "created date of file" .$this->created_Date;
  }
  
  //set file content
  public function set_file_content($content){
      $this->content =$content;
  }
  // get file content
  public function get_file_content(){
      return " File type is" .$this->content;
  }
  
}

//$file1 = new File(2,"def.txt","22/05/2022","abc");
//print_r($file1);