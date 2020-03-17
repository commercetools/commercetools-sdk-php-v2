<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\OrderEdit\OrderEditApply;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrdersEditsByIDApply extends ApiResource
{
    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders/edits/{ID}/apply', $args, $client);
    }

    /**
     * @psalm-param ?OrderEditApply $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderEditApply $body = null, array $headers = []): ByProjectKeyOrdersEditsByIDApplyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsByIDApplyPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
}
