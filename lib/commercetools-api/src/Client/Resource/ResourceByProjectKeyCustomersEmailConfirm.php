<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Customer\CustomerEmailVerify;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCustomersEmailConfirm extends ApiResource
{
    /**
     * @psalm-param ?CustomerEmailVerify $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerEmailVerify $body = null, array $headers = []): ByProjectKeyCustomersEmailConfirmPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersEmailConfirmPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

}
