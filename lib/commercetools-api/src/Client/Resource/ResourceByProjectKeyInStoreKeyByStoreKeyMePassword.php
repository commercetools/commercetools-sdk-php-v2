<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\MyCustomerChangePassword;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMePassword extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/me/password', $args, $client);
    }

    /**
     */
    public function reset(): ResourceByProjectKeyInStoreKeyByStoreKeyMePasswordReset
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMePasswordReset($args, $this->getClient());
    }

    /**
     * @psalm-param ?MyCustomerChangePassword $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCustomerChangePassword $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMePasswordPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMePasswordPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
