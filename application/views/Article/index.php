<?php defined('SYSPATH') or die('No direct script access.'); ?>
 
<h1>Kohana Blog Homepage</h1>

<?php echo HTML::anchor('Article/new', 'Novo Artigo'); ?>

<?php foreach ($articles as $article) : ?>
<div style="padding: 5px 20px 20px 20px; margin-top: 20px; background-color: #dddddd;">
    <h2><?php echo $article->title; ?></h2>
    <pre><?php echo $article->content; ?></pre>
    <?php echo HTML::anchor('Article/edit/'.$article->id, 'Editar'); ?>
    <?php echo HTML::anchor('Article/delete/'.$article->id, 'Deletar'); ?>
</div>
<?php endforeach; ?>