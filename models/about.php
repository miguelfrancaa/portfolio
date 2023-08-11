<?php
	require_once("base.php");

	class About extends Base {
		public function getAboutInfo() {

			$query = $this->db->prepare("
				SELECT *
				FROM about
				");

			$query->execute();

			return $query->fetch();

		}

		public function editText($data){
			$query = $this->db->prepare("
				UPDATE about
				SET text1 = ?
				");

			$query->execute([
				$data["text1"]
			]);
		}
	}
?>