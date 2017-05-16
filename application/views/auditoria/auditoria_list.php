<div class="areaimage">
	<center>
		<img src="{TPL_images}Security-Camera-icon.png" />
	</center>
</div>

<p class="bg-success lead text-center"><?php echo $titulo;?></p>

<div id="msg" style="display: none;">
	<img src="{TPL_images}loader.gif" class="img_aling2" alt="Carregando" />Aguarde
	carregando...
</div>


	<!-- Formulario de pesquisa -->
	<div class="row">

		<div class="col-md-2">
			<?php echo $link_add;?>
		</div>

		<div class="col-md-10" style="text-align: right;">

			<form class="form-inline" id="frm_search" name="frm_search" action="<?php  echo $form_action; ?>" method="post">

				<div class="input-group">
					<input type="text" class="form-control" id="search" name="search" placeholder="pesquisa textual" value="<?php echo $keyword_auditoria; ?>">
					<span class="input-group-btn">
						<button class="btn btn-success" type="submit">Pesquisar</button> <?php echo $link_search_cancel; ?>
					</span>
				</div>

			</form>
		</div>

	</div>
	<!-- Fim do formulario de pesquisa --> 
	
	<div style="clear:both;"></div> 
	        
	<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
			<?php echo $table; ?>
	</div>

	<!-- Paginacao -->
	<div class="row">
		<div class="col-md-4 text-center">
			<div class="dataTables_info" role="status">
				<p class="well well-sm">Total de registros:
				<?php echo $total_rows; ?>
				</p>
			</div>
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-6">
			<div class="dataTables_paginate paging_simple_numbers">
				<?php echo $pagination; ?>
			</div>
		</div>
	</div>
	<!-- Fium da paginacao -->


