<?php

	require_once("base.php");

	class Projectimgs extends Base {
		public function editPhoto($photoid){
			$query = $this->db->prepare("
				UPDATE project_imgs
				SET name = ?
				WHERE img_id = ?
				");

			$query->execute([
				$_FILES["img_project"]["name"],
				$photoid
			]);
		}

		public function getImageToEdit($photoid){
			$query = $this->db->prepare("
				SELECT *
				FROM project_imgs
				WHERE img_id = ?
				");

			$query->execute([
				$photoid
			]);

			return $query->fetch();
		}

		public function deletePhoto($photoid){
			$query = $this->db->prepare("
				DELETE FROM project_imgs
				WHERE img_id = ?
				");

			$query->execute([
				$photoid
			]);
		}

		public function addPhoto($project_id){
			$query = $this->db->prepare("
				INSERT INTO project_imgs (name, project_id)
				VALUES (?, ?)
				");

			$query->execute([
					$_FILES["imgproject"]["name"],
					$project_id
			]);
		}
	}