<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Cart\CartPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCartsGet extends ApiRequest
{
    const RESULT_TYPE = CartPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/carts');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CartPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CartPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $customerId
     * @return ByProjectKeyCartsGet
     */
    public function withCustomerId($customerId): ByProjectKeyCartsGet
    {
        return $this->withQueryParam('customerId', $customerId);
    }

}
