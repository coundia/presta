<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4gfrzsd\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4gfrzsd/appProdProjectContainer.php') {
    touch(__DIR__.'/Container4gfrzsd.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container4gfrzsd\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container4gfrzsd\appProdProjectContainer(array(
    'container.build_hash' => '4gfrzsd',
    'container.build_id' => '8bed912e',
    'container.build_time' => 1538489238,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4gfrzsd');
