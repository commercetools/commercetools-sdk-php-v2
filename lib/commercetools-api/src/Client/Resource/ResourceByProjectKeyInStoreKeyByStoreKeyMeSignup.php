<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyCustomerDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeSignup extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/me/signup', $args, $client);
    }

    /**
     * @psalm-param ?MyCustomerDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCustomerDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeSignupPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeSignupPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
