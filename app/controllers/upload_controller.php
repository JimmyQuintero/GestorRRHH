<?php

	class UploadController extends AppController {

		//var $name = 'Archivos';

		function add() {
			echo "pase por aqui";
			if (!empty($this->data)) {
				echo "la data".data;
				if ($_FILES[data]["error"] > 0)
				{
				echo "Error: " . $_FILES[data]['error'] . "<br>";
				}
				else
				{
				move_uploaded_file($_FILES[data]['tmp_name'],	"upload/" . $_FILES[data]['name']);
				echo "pase por aqui tambien";
				}
			}else{
				echo "sin datos";
			}
		}
	}
?>