<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA1PUMLO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA1PUMLO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerA1PUMLO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerA1PUMLO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerA1PUMLO\App_KernelDevDebugContainer([
    'container.build_hash' => 'A1PUMLO',
    'container.build_id' => '67fb66e1',
    'container.build_time' => 1643707784,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA1PUMLO');