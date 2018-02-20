<?php
	require_once'conexao.class.php';
	class Participante{
		
		private $IDParticipante;
		private $IDEvento;
		private $Nome;
		private $Idade;
		private $Sexo;
		private $Autorizacao;

		public function getIDParticipante(){
			return $this->IDParticipante;
		}
		public function setIDParticipante($IDParticipante){
			if(!empty($IDParticipante)) $this->IDParticipante=$IDParticipante; 
		}
		public function getIDEvento(){
			return $this->IDEvento;
		}
		public function setIDEvento($IDEvento){
			if(!empty($IDEvento)) $this->IDEvento=$IDEvento; 
		}
		public function getNome(){
			return $this->Nome;
		}
		public function setNome($Nome){
			if(!empty($Nome)) $this->Nome=$Nome; 
		}
		public function getIdade(){
			return $this->Idade;
		}
		public function setIdade($Idade){
			if(!empty($Idade)) $this->Idade=$Idade; 
		}
		public function getSexo(){
			return $this->Sexo;
		}
		public function setSexo($Sexo){
			if(!empty($Sexo)) $this->Sexo=$Sexo; 
		}
		public function getAutorizacao(){
			return $this->Autorizacao;
		}
		public function setAutorizacao($Autorizacao){
			if(!empty($Autorizacao)) $this->Autorizacao=$Autorizacao; 
		}

		public function inserir(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"INSERT INTO Participante(Nome,Idade,Sexo,IDEvento,Autorizacao)
					VALUES(:Nome,:Idade,:Sexo,:IDEvento,:Autorizacao)");
				$stmt->bindValue(":IDEvento",$this->getIDEvento());
				$stmt->bindValue(":Nome",$this->getNome());
				$stmt->bindValue(":Idade",$this->getIdade());
				$stmt->bindValue(":Sexo",$this->getSexo());
				$stmt->bindValue(":Autorizacao",$this->getAutorizacao());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

			public function Delete(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"DELETE from Participante where IDParticipante=:IDParticipante");
				$stmt->bindValue(":IDParticipante",$this->getIDParticipante());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

			public function Alterar(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"UPDATE Participante set IDEvento:IDEvento,Nome:Nome,Idade:Idade,Sexo:Sexo,Autorizacao:Autorizacao where Participante=:Participante");
				$stmt->bindValue(":IDEvento",$this->getIDEvento());
				$stmt->bindValue(":Nome",$this->getNome());
				$stmt->bindValue(":Idade",$this->getIdade());
				$stmt->bindValue(":Sexo",$this->getSexo());
				$stmt->bindValue(":Autorizacao",$this->getAutorizacao());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		public function buscarTodos(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare("SELECT * from Participante order by IDParticipante");
				$stmt->execute();
				$r=$stmt->fetchAll();
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		public function buscarID(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare("SELECT * from Participante where IDParticipante=:IDParticipante");
				$stmt->bindValue(':IDParticipante',$this->getIDParticipante());
				$stmt->execute();
				$r=$stmt->fetch();
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
				}
			}	
		}
?>