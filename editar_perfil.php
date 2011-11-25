<?php include("header.php"); ?>


<h2>Editar Perfil de Usuario</h2>

<p>
  Luego de introducir los datos que se solicitan en el formulario, podrás editar de manera interactiva los datos de tu perfil de usuario Canaima.
</p>

<form method='post' action='editar_perfil2.php'>
  <table>
  <tr>
    <td class="px160">Nombre de usuario</td>
    <td class="px120">p. ej., emeteri0</td>
    <td class="px640">
	<span id="uid_js">
		<input type='text' name='uid' id='uid' class="input5" />
		<span class="textfieldRequiredMsg">No puedes dejar éste campo en blanco.</span>
		<span class="textfieldMaxCharsMsg">Excediste el número máximo de 60 Caracteres.</span>
    </span>
	</td>
  </tr>
  <tr>
    <td class="px160">Contraseña</td>
    <td class="px120">introduzca su contraseña</td>
    <td class="px640">
    <span id="userPassword_js">
		<input type='password' name='userPassword' id='userPassword' class="input5" />
    	<span class="textfieldRequiredMsg">No puedes dejar éste campo en blanco.</span>
		<span class="textfieldMaxCharsMsg">Excediste el número máximo de 20 Caracteres.</span>
		<span class="textfieldMinCharsMsg">La contraseña debe tener al menos 8 Caracteres.</span>
    </span>
    </td>
  </tr>
  <tr>
    <td class="px160">Verificación</td>
    <td class="px120"><img src="captcha.php" border="0"></td>
    <td class="px640">
    <span id="image_captcha_js">
		<input name='image_captcha' id='image_captcha' class="input5" />
    	<span class="textfieldRequiredMsg">No puedes dejar éste campo en blanco.</span>
    	<span class="textfieldMaxCharsMsg">Excediste el número máximo de 8 Caracteres.</span>
    </span>
    </td>
  </tr>
  </table>
  <input type='submit' value='ENVIAR' class="boton" />

</form>

<script type="text/javascript">
var uid_var = new Spry.Widget.ValidationTextField("uid_js", "none", {validateOn:["blur"], maxChars:60});
var userPassword_var = new Spry.Widget.ValidationTextField("userPassword_js", "none", {validateOn:["blur"], maxChars:20, minChars:8});
var image_captcha_var = new Spry.Widget.ValidationTextField("image_captcha_js", "none", {validateOn:["blur"], maxChars:8});
</script>

<?php include("footer.php"); ?>
