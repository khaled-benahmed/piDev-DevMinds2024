<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX8ppO4h\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX8ppO4h/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX8ppO4h.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX8ppO4h\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX8ppO4h\App_KernelDevDebugContainer([
    'container.build_hash' => 'X8ppO4h',
    'container.build_id' => 'd9e66141',
    'container.build_time' => 1708527946,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX8ppO4h');