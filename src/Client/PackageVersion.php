<?php


namespace Commercetools\Client;

use Composer\InstalledVersions;

class PackageVersion
{
    public static function get(): ?string
    {
        if (class_exists("\Composer\InstalledVersions")) {
            return InstalledVersions::getPrettyVersion('commercetools/commercetools-sdk');
        }
        return null;
    }
}
