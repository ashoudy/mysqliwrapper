<?php
	class Database extends mysqli
	{
		private $Username = "username";
		private $Password = "password";
		private $Server   = "localhost";
		private $Table	  = "database";
		private $Results;
		private $SelectedResult;
		private $Connection;
		
		public function __construct($raw_connect)
		{
					$this->Connection = mysqli_connect($this->Server, $this->Username, $this->Password, $this->Table);
					
					if(!$this->Connection)
					{
						die("Failure!<BR>");
					}
					
		}
		
		public function Query($query_string)
		{
			//echo($query_string."<BR>");
			$this->Results = mysqli_query($this->Connection,$query_string);
		}
		
		public function SelectNextResult()
		{
			$this->SelectedResult = mysqli_fetch_assoc($this->Results);
			return $this->SelectedResult;
		}
		
		public function GetResult($row)
		{
			return $this->SelectedResult[$row];
		}
	public function Escape($var)
		{
			$vari = mysqli_real_escape_string($this->Connection, $var);
			return $vari;
		}	
		public function Close()
		{
			mysqli_close($this->Connection);
		}
	};
?>
