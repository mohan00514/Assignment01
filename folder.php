<?php
include("file.php");
class Folder{

    private $folderName;
    private $createdDate;
    private $folderOwner;
    private $fileType;
    private $file_array; 

    function __construct($folderName,$createdDate, $folderOwner,$fileType,){
        $this->folderName = $folderName;
        $this->createdDate = $createdDate;
        $this->folderOwner = $folderOwner;
        $this->fileType = $fileType;
        $this->file_array = array();

    }
    
    public function set_folder_name($folderName){
       
        $this->folderName = $folderName;
       
    }
    // get Folder Name
    public function get_folder_name(){
        return  $this->folderName;
    }
    
    // set  created date of Folder
    public function set_create_date($createdDate){
       
        $this->createdDate = $createdDate;
       
    }
    // get created date of Folder
    public function get_create_date(){
        return  $this->createdDate;
    }
    
    // set owner of folder
    public function set_folder_owner( $folderOwner){
        $this->folderOwner = $folderOwner;
    }
    
    // get owner of folder
    public function get_folder_owner(){
        return $this->folderOwner;
    }
    
   public function setFile_array($file_array): self {
		$this->file_array = $file_array;
		return $this;
	}

    public function getfile_array(){
        return $this->file_array;
    }
    
    
    
    public function insertFile(File $file){
            $this->file_array[$file->get_file_name()] = $file;
    }
    
    public function delete_file(File $file){
        unset($this->file_array [$file->get_file_name()]);
        
               
    }
    public function getFile(File $file){
        return $this->file_array[$file->get_file_name()] ;

    }
}

$folder1 =new Folder("www","22/09/2022","dave","videos");
$folder2 =new Folder("Road","22/10/2022","Arun","images");
$file1 = new File(1,"abc.txt","22/052022","abc");
/*
$folder2->insertFile($file1);
echo "<pre>";
print_r($folder2);
echo "</pre>";
$folder2->delete_file($file1);
echo "<pre>";
print_r($folder2);
echo "</pre>";
 */  
