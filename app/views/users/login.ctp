<div class="ui two column centered grid stackable">
    <div class="column">
        <div class="ui segment very padded">
            <h3 class="ui header">
                <?php echo $this->Html->image('LaboraGT-logo-noText.png'); ?>
                Inicio Sesión
            </h3>
            <div class="ui divider hidden"></div>
            <?php if ($this->Session->check('Message.flash')) { ?>
            <div class="ui error message">
                <p><?php echo $this->Session->flash(); ?></p>
            </div>
            <?php } ?>



            <form action="/GestorRRHH/users/login/" id="UserLoginForm" method="post" accept-charset="utf-8" class="ui form">
                <div class="field required">
                    <label for="UserUSERNAME">Usuario</label>
                <input name="data[User][USERNAME]" type="text" maxlength="50" id="UserUSERNAME" required>
                </div>
                <div class="field required">
                    <label for="UserPASSWORD">Contraseña</label><input type="password" name="data[User][PASSWORD]" id="UserPASSWORD" required>
                </div>
                <button class="ui button fluid teal" type="submit">Ingresar</button>
                
            </form>
            <!--<h5 class="ui header centered "><a href="">Olvidaste tu contraseña?</a></h5>-->
            <div class="ui divider hidden"></div>
        </div>
    </div>
</div>
