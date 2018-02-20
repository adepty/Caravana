<?php
	require_once'conexao.class.php';
	class Evento{
		
		private $IDEvento
		private $Endereco;
		private $Data;
		private $Inicio;
		private $Termino;
		private $Valor;
		private $Nome;

		public function getIDEvento(){
			return $this->IDEvento;
		}
		public function setIDEvento($IDEvento){
			if(!empty($IDEvento)) $this->IDEvento=$IDEvento; 
		}

		public function getEndereco(){
			return $this->Endereco;
		}
		public function setEndereco($Endereco){
			if(!empty($Endereco)) $this->Endereco=$Endereco; 
		}
		public function getData(){
			return $this->Data;
		}
		public function setData($Data){
			if(!empty($Data)) $this->Data=$Data; 
		}
		public function getInicio(){
			return $this->Inicio;
		}
		public function setInicio($Inicio){
			if(!empty($Inicio)) $this->Inicio=$Inicio; 
		}
		public function getTermino(){
			return $this->Termino;
		}
		public function setTermino($Termino){
			if(!empty($Termino)) $this->Termino=$Termino; 
		}
		public function getValor(){
			return $this->Valor;
		}
		public function setValor($Valor){
			if(!empty($Valor)) $this->Valor=$Valor; 
		}
		public function getNome(){
			return $this->Nome;
		}
		public function setNome($Nome){
			if(!empty($Nome)) $this->Nome=$Nome; 
		}
		public function inserir(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"INSERT INTO Evento(Nome,Endereco,Data,Inicio,Termino,Valor)
					VALUES(:Nome,:Endereco,:Data,:Inicio,:Termino,Valor)");
				$stmt->bindValue(":Nome",$this->getNome());
				$stmt->bindValue(":Endereco",$this->getEndereco());
				$stmt->bindValue(":Data",$this->getData());
				$stmt->bindValue(":Inicio",$this->getInicio());
				$stmt->bindValue(":Termino",$this->getTermino());
				$stmt->bindValue(":Valor",$this->getValor());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

			public function Delete(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"DELETE from Evento where IDEvento=:IDEvento");
				$stmt->bindValue(":IDEvento",$this->getIDEvento());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

			public function Alterar(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"UPDATE Evento set Nome:Nome,Endereco:Endereco,Data:Data,Inicio:Inicio,Termino:Termino,Valor:Valor where IDEvento=:IDEvento");
				$stmt->bindValue(":Nome",$this->getNome());
				$stmt->bindValue(":Endereco",$this->getEndereco());
				$stmt->bindValue(":Data",$this->getData());
				$stmt->bindValue(":Inicio",$this->getInicio());
				$stmt->bindValue(":Termino",$this->getTermino());
				$stmt->bindValue(":Valor",$this->getValor());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		public function buscarTodos(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare("SELECT * from Evento order by IDEvento");
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
				$stmt = $conect->conn->prepare("SELECT * from Evento where IDEvento=:IDEvento");
				$stmt->bindValue(':IDEvento',$this->getIDEvento());
				$stmt->execute();
				$r=$stmt->fetch();
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
				}
			}	
		}
?>