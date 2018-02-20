<?php
	require_once'conexao.class.php';
	class Transporte{
		
		private $Tipo;
		private $IDEvento;
		private $IDTransporte;
		private $Capacidade;
		private $Valor;

		public function getTipo(){
			return $this->Tipo;
		}
		public function setTipo($Tipo){
			if(!empty($Tipo)) $this->Tipo=$Tipo; 
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
		public function getCapacidade(){
			return $this->Capacidade;
		}
		public function setCapacidade($Capacidade){
			if(!empty($Capacidade)) $this->Capacidade=$Capacidade; 
		}
		public function getValor(){
			return $this->Valor;
		}
		public function setValor($Valor){
			if(!empty($Valor)) $this->Valor=$Valor; 
		}

		public function inserir(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"INSERT INTO Transporte(IDEvento,Capacidade,Valor,Tipo)
					VALUES(:IDEvento,:Capacidade,:Valor,:Tipo)");
				$stmt->bindValue(":IDEvento",$this->getIDEvento());
				$stmt->bindValue(":Capacidade",$this->getCapacidade());
				$stmt->bindValue(":Valor",$this->getValor());
				$stmt->bindValue(":Tipo",$this->getTipo());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

			public function Delete(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"DELETE from Transporte where IDTransporte=:IDTransporte");
				$stmt->bindValue(":IDTransporte",$this->getIDTransporte());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

			public function Alterar(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"UPDATE Transporte set IDEvento:IDEvento,Capacidade:Capacidade,Valor:Valor,Tipo:Tipo where Transporte=:Transporte");
				$stmt->bindValue(":IDEvento",$this->getIDEvento());
				$stmt->bindValue(":Capacidade",$this->getCapacidade());
				$stmt->bindValue(":Valor",$this->getValor());
				$stmt->bindValue(":Tipo",$this->getTipo());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		public function buscarTodos(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare("SELECT * from Transporte order by IDTransporte");
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
				$stmt = $conect->conn->prepare("SELECT * from Transporte where IDTransporte=:IDTransporte");
				$stmt->bindValue(':IDTransporte',$this->getIDTransporte());
				$stmt->execute();
				$r=$stmt->fetch();
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
				}
			}	
		}
?>