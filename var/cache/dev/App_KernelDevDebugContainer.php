<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQHZjSox\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQHZjSox/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQHZjSox.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQHZjSox\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQHZjSox\App_KernelDevDebugContainer([
    'container.build_hash' => 'QHZjSox',
    'container.build_id' => 'd771e596',
    'container.build_time' => 1734101736,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQHZjSox');
