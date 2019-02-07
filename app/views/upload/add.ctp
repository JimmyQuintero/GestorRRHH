<div class="ui segment vertical">
    <div class="ui container"></div>
    <div class="ui divider hidden"></div>   
    <?php 
    if ($_FILES['archivo']["error"] > 0){
		echo "Error: " . $_FILES['archivo']['error'] . "<br>";
	}else{
		move_uploaded_file($_FILES['archivo']['tmp_name'],	"upload/" . $_FILES['archivo']['name']);
		echo "pase por aqui tambien";
	}?>
</div>
