lmrs/task-phinx
============

Example
=======

This will create commands for each of the standard phinx commands.

```php

use Task\Plugin;

$project = new Task\Project('task-phinx-example');
$project->inject(function ($container) {
    $container['phinx'] = new Plugin\PhinxPlugin();
});

$project->addTask('phinx', 'Phinx', ['phinx:status']);

foreach (['create', 'status', 'migrate', 'rollback', 'test', 'init', 'list'] as $method) {
    $project->addTask('phinx:' . $method, ['phinx', function ($phinx) use ($method) {
        $phinx->command($method)
            ->setConfiguration($this->getProperty('configuration', 'php/phinxconfig.php'))
            ->pipe($this->getOutput());
    }]);
}

```

Installation
============

Add to your `composer.json`:
```json
...
"require-dev": {
    "task/phinx": "~0.1"
}
...
```
