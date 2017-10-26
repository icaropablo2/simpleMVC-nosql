<!-- Page Heading -->
<h1 class="my-4">Page Heading
	<small>Secondary Text</small>
</h1>

<!-- Project One -->
<?php foreach($games as $game){  ?>
<div class="row">
	<div class="col-md-7">
		<a href="<?= $this->Html->url('Spear Battle/ Meus Amigos Ícaro') ?>">
			<?= $this->Html->image("games/{$game['cover']}",['class'=>'img-fluid rounded mb-3 mb-md-0']) ?>
		</a>
	</div>
	<div class="col-md-5">
		<h3><?= $game['name'] ?></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
		<a class="btn btn-primary" href="#">View Project</a>
	</div>
</div>
<!-- /.row -->


<hr>
<?php } ?>