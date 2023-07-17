<?php
	require_once("base.php");

	class Projects extends Base {
		public function getProjectsIndex() {

			$query = $this->db->prepare("
				SELECT title, description, year, img_description, category_id, year
				FROM projects
				ORDER BY year desc
				LIMIT 3
				");

			$query->execute();

			return $query->fetchAll();

		}

		public function getNumberProjects(){
			$query = $this->db->prepare("
				SELECT COUNT(project_id)
				FROM projects
				");

			$query->execute();

			return $query->fetch();
		}

		public function getAllProjects(){

			$query = $this->db->prepare("
				SELECT projects.project_id, projects.title, projects.description, projects.year, projects.img_description, categories.class, categories.name
				FROM projects
				INNER JOIN categories USING (category_id)
				ORDER BY year desc
				");

			$query->execute();

			return $query->fetchAll();
		}

		public function getProjectDetails($id){
			$query = $this->db->prepare("
				SELECT *
				FROM projects
				WHERE project_id = ?
				");

				$query->execute([
				$id
			]);

			return $query->fetch();
			}

		public function getProjectImgs($id){
			$query = $this->db->prepare("
				SELECT *
				FROM project_imgs
				WHERE project_id = ?
				");

				$query->execute([
				$id
			]);

			return $query->fetchAll();
			}
	}
?>