<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWFqafB7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWFqafB7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWFqafB7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWFqafB7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWFqafB7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WFqafB7',
    'container.build_id' => 'ae6d2acf',
    'container.build_time' => 1589529938,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWFqafB7');