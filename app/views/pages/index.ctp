<?php 
if(isset($_POST['enviar'])){
    print_r("Entre");    
    if ($_FILES['archivo']["error"] > 0){
        print_r("Error: " . $_FILES['archivo']['error']);
    }else{   
        move_uploaded_file($_FILES['archivo']['tmp_name'],  "upload/" . $_FILES['archivo']['name']);
        echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
    }
}
?>

<div class="ui segment vertical">
    <div class="ui container">
        <div class="ui header block">
            <div class="ui breadcrumb">
                <a href="/GestorRRHH/" class="section"><i class="icon home "></i></a>
                <i class="right angle icon divider"></i>
                <div class="section active">Archivos</div>
            </div>
        </div>
        <h1 class="ui header">Carga de Archivos</h1>
        <div class="ui divider"></div>        
        <!-- Carga de Archivos -->

        <form  class="ui form " action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" accept-charset="utf-8">
            <div class="field">
                <input type="hidden" name="enviar" value="POST">

                <div class="two fields">                   
                    <div class="field">
                        <label>Archivo</label>
                        <input type="file" name="archivo" id="archivo"></input>
                    </div>                    
                    <div class="field">     
                        <label>-</label>   
                        <input type="submit" value="Subir archivo"></input>                                    
                        <!-- <a class="ui button teal" href="">Subir Archivo</a> -->
                    </div>
                </div>
            </div>

        </form>
    
    </div>


</div>



