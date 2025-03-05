<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\MyCustomerEmailVerify;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeEmailConfirm extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/me/email/confirm', $args, $client);
    }

    /**
     * @psalm-param ?MyCustomerEmailVerify $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCustomerEmailVerify $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeEmailConfirmPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeEmailConfirmPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
