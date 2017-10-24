<?php

namespace XmtApp\Installer\Installers;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;
/**
 * Class Installer.
 */
class ModuleInstaller extends LibraryInstaller
{
    /**
     * Get install path for Composer Installer.
     *
     * @param \Composer\Package\PackageInterface $package
     *
     * @return string
     */
    public function getInstallPath(PackageInterface $package)
    {
        list($vendor, $name) = explode('/', $package->getPrettyName());
        return 'modules/' . $name;
    }
    /**
     * Confirm supported Package Types.
     *
     * @param $packageType
     *
     * @return bool
     */
    public function supports($packageType)
    {
        return $packageType === 'xmtapp-module';
    }
}