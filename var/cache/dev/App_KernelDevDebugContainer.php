<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCMh9ZDy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCMh9ZDy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCMh9ZDy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCMh9ZDy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCMh9ZDy\App_KernelDevDebugContainer([
    'container.build_hash' => 'CMh9ZDy',
    'container.build_id' => '65112600',
    'container.build_time' => 1643789143,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCMh9ZDy');
