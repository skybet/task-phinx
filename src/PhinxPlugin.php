<?php
namespace Task\Plugin;

use Phinx\Console\PhinxApplication;
use Task\Plugin\Console\ApplicationPlugin;

class PhinxPlugin
    extends ApplicationPlugin
    implements PluginInterface
{
    public function __construct($version = '0.3.0')
    {
        parent::__construct(
            new PhinxApplication($version)
        );
    }
}
