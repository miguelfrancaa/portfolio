<?php
	require_once("base.php");

	class Objectives extends Base {
		public function getObjectives() {

			$query = $this->db->prepare("
				SELECT *
				FROM objectives
				");

			$query->execute();

			return $query->fetchAll();

		}

		public function newObjective($data) {
			$query = $this->db->prepare("
				INSERT INTO objectives (objective_title, objective_content)
				VALUES (?, ?)
				");

			$query->execute([
				$data["titleObjective"],
				$data["contentObjective"]
			]);
		}

		public function deleteObjective($resource_id){
			$query = $this->db->prepare("
				DELETE FROM objectives
				WHERE objective_id = ?
				");

			$query->execute([$resource_id]);
		}

		public function objectiveToEdit($resource_id){
			$query = $this->db->prepare("
				SELECT *
				FROM objectives
				WHERE objective_id = ?
				");

			$query->execute([$resource_id]);

			return $query->fetch();
		}

		public function editObjective($data){
			$query = $this->db->prepare("
				UPDATE objectives
				SET objective_title = ?, objective_content = ?
				WHERE objective_id = ?
				");

			$query->execute([
				$data["objective_title"],
				$data["objective_content"],
				$data["objective_id"]
				]);
		}
	}
?>