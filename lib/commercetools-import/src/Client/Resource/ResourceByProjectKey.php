<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKey extends ApiResource
{
    public function importSinks(): ResourceByProjectKeyImportSinks
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportSinks($this->getUri().'/import-sinks', $args, $this->getClient());
    }
}
