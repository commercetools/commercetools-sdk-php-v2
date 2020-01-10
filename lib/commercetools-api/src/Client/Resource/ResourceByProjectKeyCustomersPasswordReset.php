<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerResetPassword;
use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCustomersPasswordReset extends ApiResource
{
    /**
     * @psalm-param ?CustomerResetPassword $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerResetPassword $body = null, array $headers = []): ByProjectKeyCustomersPasswordResetPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersPasswordResetPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
