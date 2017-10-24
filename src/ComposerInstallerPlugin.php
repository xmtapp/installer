<?php

namespace XmtApp\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

use XmtApp\Installer\Installers\ModuleInstaller;

class ComposerInstallerPlugin implements PluginInterface {
    /**
     * activate function
     *
     * @param Composer $composer
     * @param IOInterface $io
     * @return void
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $composer->getInstallationManager()->addInstaller(new ModuleInstaller($io, $composer));
    }
}