<?php
/** @var yii\web\View $this */
?>
<h1>articles/index</h1>

<p> ID <?= $id ?></p>

<?php if ($crypt):  ?>
    <p> ID Crypt: <?= sha1($id) ?> </p>
<?php endif; ?>

criando com ./yii gii/controller --controllerClass=app\\controllers\\ArticlesController