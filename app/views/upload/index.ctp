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
        <?php $msg = $this->Session->flash(); ?>
        <?php if($msg != "") { ?>
        <div class="ui positive message">
            <?php echo $msg; ?>
        </div>
        <?php }?>
        <!-- Carga de Archivos -->

        <form  class="ui form " action="/GestorRRHH/upload" id="indexForm" method="post" accept-charset="utf-8">
            <input type="hidden" name="_method" value="POST">

            <div class="field">

                <div class="two fields">                   
                    <div class="field">
                        <label>Archivo</label>
                        <input type="file" name="archivo">
                    </div>                    
                    <div class="field">
                        <label>-</label>
                        <a class="ui button teal" href="/GestorRRHH/upload/add">Subir Archivo</a>
                    </div>
                </div>
            </div>

        </form>
    
    </div>


</div>
