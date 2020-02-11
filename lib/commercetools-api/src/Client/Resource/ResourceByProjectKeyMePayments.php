<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Me\MyPaymentDraft;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyMePayments extends ApiResource
{
    public function withId(string $ID = null): ResourceByProjectKeyMePaymentsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMePaymentsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMePaymentsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePaymentsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyPaymentDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyPaymentDraft $body = null, array $headers = []): ByProjectKeyMePaymentsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePaymentsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

}
