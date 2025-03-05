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
class ResourceByProjectKeyMeSignup extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/signup', $args, $client);
    }

    /**
     * @psalm-param ?MyCustomerDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCustomerDraft $body = null, array $headers = []): ByProjectKeyMeSignupPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeSignupPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
