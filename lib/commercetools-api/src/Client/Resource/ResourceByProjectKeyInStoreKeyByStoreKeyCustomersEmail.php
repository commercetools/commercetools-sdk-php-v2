<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmail extends ApiResource
{
    public function confirm(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm($this->getUri().'/confirm', $args, $this->getClient());
    }
}
