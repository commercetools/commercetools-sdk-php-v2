<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Product\ProductProjectionPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductProjectionsGet extends ApiRequest
{
    const RESULT_TYPE = ProductProjectionPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/product-projections');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductProjectionPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductProjectionPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $staged
     * @return ByProjectKeyProductProjectionsGet
     */
    public function withStaged($staged): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('staged', $staged);
    }

}
