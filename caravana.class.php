<?php
	require_once'conexao.class.php';
	class Caravana{
		
		private $IDCaravana;
		private $IDEvento;
		private $IDTransporte;
		private $Nome;
		private $Valor;
		private $Partida;

		public function getIDCaravana(){
			return $this->IDCaravana;
		}
		public function setIDCaravana($IDCaravana){
			if(!empty($IDCaravana)) $this->IDCaravana=$IDCaravana; 
		}
		public function getIDEvento(){
			return $this->IDEvento;
		}
		public function setIDEvento($IDEvento){
			if(!empty($IDEvento)) $this->IDEvento=$IDEvento; 
		}
		public function getIDTransporte(){
			return $this->IDTransporte;
		}
		public function setIDTransporte($IDTransporte){
			if(!empty($IDTransporte)) $this->IDTransporte=$IDTransporte; 
		}
		public function getNome(){
			return $this->Nome;
		}
		public function setNome($Nome){
			if(!empty($Nome)) $this->Nome=$Nome; 
		}
		public function getValor(){
			return $this->Valor;
		}
		public function setValor($Valor){
			if(!empty($Valor)) $this->Valor=$Valor; 
		}
		public function getPartida(){
			return $this->Partida;
		}
		public function setPartida($Partida){
			if(!empty($Partida)) $this->Partida=$Partida; 
		}
		public function inserir(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"INSERT INTO Caravana(IDEvento,IDTransporte,Nome,Valor,Partida)
					VALUES(:IDEvento,:IDTransporte,:Nome,:Valor,:Partida)");
				$stmt->bindValue(":IDEvento",$this->getIDEvento());
				$stmt->bindValue(":IDTransporte",$this->getIDTransporte());
				$stmt->bindValue(":Nome",$this->getNome());
				$stmt->bindValue(":Valor",$this->getValor());
				$stmt->bindValue(":Partida",$this->getPartida());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

			public function Delete(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"DELETE from Caravana where IDCaravana=:IDCaravana");
				$stmt->bindValue(":IDCaravana",$this->getIDCaravana());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

			public function Alterar(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"UPDATE Caravana set IDEvento:IDEvento,IDTransporte:IDTransporte,Nome:Nome,Valor:Valor,Partida:Partida where IDCaravana=:IDCaravana");
				$stmt->bindValue(":IDEvento",$this->getIDEvento());
				$stmt->bindValue(":IDTransporte",$this->getIDTransporte());
				$stmt->bindValue(":Nome",$this->getNome());
				$stmt->bindValue(":Valor",$this->getValor());
				$stmt->bindValue(":Partida",$this->getPartida());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		public function buscarTodos(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare("SELECT * from Caravana order by IDCaravana");
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
				$stmt = $conect->conn->prepare("SELECT * from Caravana where IDCaravana=:IDCaravana");
				$stmt->bindValue(':IDCaravana',$this->getIDCaravana());
				$stmt->execute();
				$r=$stmt->fetch();
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
				}
			}	
		}
?>