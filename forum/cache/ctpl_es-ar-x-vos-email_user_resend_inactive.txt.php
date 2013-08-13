<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Bienvenido a "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" - <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>


<?php echo (isset($this->_rootref['WELCOME_MSG'])) ? $this->_rootref['WELCOME_MSG'] : ''; ?>


Por favor guardá este email para futuras referencias. La información de tu cuenta es la siguiente:

----------------------------
Nombre de usuario: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>

----------------------------

Tu contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvides tendrás la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a tu cuenta.

Por favor visita el siguiente enlace para activar tu cuenta:

<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>



Gracias por registrarte.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>