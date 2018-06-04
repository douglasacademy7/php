<?php 
class User
{
	
	private $db;
	private $id;
	private $name;
	private $email;
	
	function __construct(Mysqli $mysqli)
	{
		$this->db =  $mysqli;
	}
	public function find($id){
		$stmt = $this->db->stmt_init();
		$stmt->prepare("SELECT * FROM user WHERE id = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id,$name,$email);
		$stmt->fetch();
		return array("id"=>$id,"name"=>$name,"email"=>$email);
	}
	
	
	
	public function delete($id){
		$stmt = $this->db->stmt_init();
		$stmt->prepare("DELETE FROM user WHERE id = ?");
		$stmt->bind_param("i",$id);
		
		return $stmt->execute();
	}
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}