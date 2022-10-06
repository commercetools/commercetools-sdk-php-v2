<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyBusinessUnitAssociateDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMeCustomers extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-business-unit/key={businessUnitKey}/me/customers', $args, $client);
    }

    /**
     * @psalm-param ?MyBusinessUnitAssociateDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyBusinessUnitAssociateDraft $body = null, array $headers = []): ByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMeCustomersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMeCustomersPost($args['projectKey'], $args['businessUnitKey'], $body, $headers, $this->getClient());
    }
}
