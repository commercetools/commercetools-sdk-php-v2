<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyMeEmail extends ApiResource
{
    public function confirm(): ResourceByProjectKeyMeEmailConfirm
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeEmailConfirm($this->getUri().'/confirm', $args, $this->getClient());
    }
}
