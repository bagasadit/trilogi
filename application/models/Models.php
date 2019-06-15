<?php
class Models extends CI_model {

	public function __construct(){
		parent::__construct();
	}

	public function get_team(){
		$query = $this->db->get('team');
		return $query->result();
	}

	public function input_project($email){
		$this->email_project = $email;
		$this->db->insert('project',$this);
	}

	public function send_message($name,$email,$message){
		$this->name_sender_message = $name;
		$this->email_sender_message = $email;
		$this->message_sender = $message;

		$this->db->insert('message', $this);
	}

	public function change_status_project($id){
		$query = $this->db->query("UPDATE project SET `status_project` = '1' WHERE `id_project` = '$id'");
	}

	public function delete_messages($id){
		$query = $this->db->query("DELETE FROM `message` WHERE `message`.`id_message` = '$id'");
	}
}
?>