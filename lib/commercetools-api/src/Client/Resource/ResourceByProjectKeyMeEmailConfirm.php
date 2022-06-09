<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerEmailVerify;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeEmailConfirm extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/email/confirm', $args, $client);
    }

    /**
     * @psalm-param ?CustomerEmailVerify $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerEmailVerify $body = null, array $headers = []): ByProjectKeyMeEmailConfirmPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeEmailConfirmPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
