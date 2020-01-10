<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\OrderEdit\OrderEditApply;
use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyOrdersEditsByIDApply extends ApiResource
{
    /**
     * @psalm-param ?OrderEditApply $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderEditApply $body = null, array $headers = []): ByProjectKeyOrdersEditsByIDApplyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsByIDApplyPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
}
