<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Notificación de respuesta al tema - "<?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>"

Hola <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Estás recibiendo esta notificación porque estás siguiendo el foro, "<?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>" de "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>".
Este tema ha recibido una respuesta desde tu última visita. 
Siguiendo este enlace podés ver esta respuesta, no se enviarán más notificaciones hasta que visites este tema.

Si querés ver los nuevos mensajes desde tu última visita, hace clic en el siguiente enlace:
<?php echo (isset($this->_rootref['U_NEWEST_POST'])) ? $this->_rootref['U_NEWEST_POST'] : ''; ?>


Si querés ver el tema, hace clic en el siguiente enlace:
<?php echo (isset($this->_rootref['U_TOPIC'])) ? $this->_rootref['U_TOPIC'] : ''; ?>


Si querés ver el foro, hace clic en el siguiente enlace:
<?php echo (isset($this->_rootref['U_FORUM'])) ? $this->_rootref['U_FORUM'] : ''; ?>


Si no querés seguir más este tema podés hacer clic en "Cancelar suscripción al tema" cuando estés ahí, 
o bien siguiendo este enlace:

<?php echo (isset($this->_rootref['U_STOP_WATCHING_TOPIC'])) ? $this->_rootref['U_STOP_WATCHING_TOPIC'] : ''; ?>


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>