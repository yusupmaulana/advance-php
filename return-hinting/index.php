<?php

require __DIR__.'/PostInterface.php';
require __DIR__.'/Post.php';
require __DIR__.'/Mutator/StringMutator.php';
require __DIR__.'/Mutator/PostMutator.php';

use Mutator\PostMutator;

$post = new Post('Belajar OOP','Saya sedang Belajar OOP');
$mutator = new PostMutator($post);

echo $mutator->getBoldTitle() . '<br>';

echo $post->getContent() . '<br>';
echo $mutator->getItalicContent() . '<br>';
echo $mutator->getUnderlineContent() . '<br>';
echo $mutator->getStrikeContent() . '<br>';
print_r($mutator->getOriginalPost());




?>
