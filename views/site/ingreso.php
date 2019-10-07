<?php echo Yii::$app->controller->renderPartial('_url');?>

<p>Usuario :<input type="text" id="usuario" class="form-control" placeholder="Digite Nombre del usuario">
<br>
<p>Constraseña :<input type="password" id="password" class="form-control" placeholder="Digite su contraseña">
<br>
<Button class="btn btn-primary" onclick="acceso()">Login</Button>