<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<div class="panel">
	<div class="content" style="padding: 20px;">
		<h1>Tutoriales</h1>
	  	<p>Aquí encontrarás todos los tutoriales que han sido publicados por nuestros usuarios y previamente aprobados.</p>
	  	<br>
	  	<p>Si quieres aportar tu grano de arena, y publicar un tutorial, ¡eres bienvenido!. Debes recordar que para que tu aporte se muestre en esta lista, primero deberá ser revisado y aprobado por un miembro del staff.</p>
	  	<p>Por favor, hecha un vistazo a la siguiente <a href="viewtopic.php?f=42&t=4758">publicación</a>.</p>
		
	 	<ul>
	 		<?php $_tutorials_count = (isset($this->_tpldata['tutorials'])) ? sizeof($this->_tpldata['tutorials']) : 0;if ($_tutorials_count) {for ($_tutorials_i = 0; $_tutorials_i < $_tutorials_count; ++$_tutorials_i){$_tutorials_val = &$this->_tpldata['tutorials'][$_tutorials_i]; if ($_tutorials_val['CATEGORY']) {  ?>

		 			<h2 style="margin-top: 25px; color: #FFDD00"><?php echo $_tutorials_val['CATEGORY']; ?></h2>
		 		<?php } else { ?>

					<li style="padding: 5px; border-bottom: 1px dashed #24333C">
						<h3><?php echo $_tutorials_val['TUTORIAL_TITLE']; ?></h3>
						Publicado por <strong><?php echo $_tutorials_val['TUTORIAL_AUTHOR']; ?></strong>
					</li>
				<?php } }} ?>

		</ul>
	</div>
</div>

<?php $this->_tpl_include('overall_footer.html'); ?>