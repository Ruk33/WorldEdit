<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Reactivar tu cuenta

Hola <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Tu cuenta en "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" ha sido desactivada, probablemente debido a cambios hechos en tu perfil. 
Para reactivar tu cuenta tenés que hacer clic en el siguiente enlace:

<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>