<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNqaxZK5\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNqaxZK5/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNqaxZK5.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNqaxZK5\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNqaxZK5\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NqaxZK5',
    'container.build_id' => '6a85dace',
    'container.build_time' => 1621925333,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNqaxZK5');
