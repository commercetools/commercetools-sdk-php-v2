<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyPaymentDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMePayments extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/payments', $args, $client);
    }

    public function withId(string $ID = null): ResourceByProjectKeyMePaymentsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMePaymentsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMePaymentsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePaymentsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyPaymentDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyPaymentDraft $body = null, array $headers = []): ByProjectKeyMePaymentsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePaymentsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
