<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerCreatePasswordResetToken;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCustomersPasswordToken extends ApiResource
{
    /**
     * @psalm-param ?CustomerCreatePasswordResetToken $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerCreatePasswordResetToken $body = null, array $headers = []): ByProjectKeyCustomersPasswordTokenPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersPasswordTokenPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
