<?

class Board_model extends CI_Model {

	public $get_result;
	
	public function __construct(){

		parent::__construct();
		
		$this->load->database();
	}

	public function view_posts(){

		$i=0;
		$get_result = $this->db->get('post_board')->result_array();
		
		return $get_result;
	}

	public function view_content($no='1'){
		$get_result = $this->db->get_where('post_board', array('no'=> $no))->result_array();
		return $get_result;
	}

	public function insert_posts(){

		$this->db->insert('post_board',array(
			'date'=>date('Ymd'),
			'title'=>'hihihi',
			'id'=>'aakd',
			'no'=>1,
			'look'=>2
			));

		$this->db->insert('post_board',array(
			'date'=>date('Ymd'),
			'title'=>'hello',
			'id'=>'parkji',
			'no'=>2,
			'look'=>5
			));
	}
}

?>