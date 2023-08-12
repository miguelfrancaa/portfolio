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

		public function editTitle($data){
			$query = $this->db->prepare("
				UPDATE about
				SET title = ?
				");

			$query->execute([
				$data["title"]
			]);
		}

		public function editText2($data){
			$query = $this->db->prepare("
				UPDATE about
				SET text2 = ?
				");

			$query->execute([
				$data["text2"]
			]);
		}

		public function editImgAbout($data){
			$query = $this->db->prepare("
				UPDATE about
				SET img = ?
				");

			$query->execute([
				$_FILES["imgabout"]["name"]
			]);
		}
	}
?>