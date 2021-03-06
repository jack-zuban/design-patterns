<?php

require (__DIR__ . '/../../vendor/autoload.php');

//let's create a simple text element and render it without any tags.
$text = new \Decorator\TextElement('Simple text');
echo $text->renderElement() . PHP_EOL;

//now using our decorator, let's decorate it with a span tag.
$spanText = new \Decorator\SpanDecorator($text);
echo $spanText->renderElement() . PHP_EOL;

//we can make a chain of decorators. Let's make a chain of <span> tags and render out text element inside this chain.
$spanSecond = new \Decorator\SpanDecorator($spanText);
echo $spanSecond->renderElement() . PHP_EOL;

//with this example we create an image and render it inside the <div> and <span> chain.
//decorator allows us to make any decorations for objects without changing them.
$image = new \Decorator\ImageElement('image.png', 'Nice image');
$imageWithDecoration = new \Decorator\DivDecorator(new \Decorator\SpanDecorator($image));
echo $imageWithDecoration->renderElement() . PHP_EOL;
