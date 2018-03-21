<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Product\ProductProjection;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductProjectionsByIDGet extends ApiRequest
{
    const RESULT_TYPE = ProductProjection::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/product-projections/%s', $projectKey, $ID);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductProjection
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductProjection
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $staged
     * @return ByProjectKeyProductProjectionsByIDGet
     */
    public function withStaged($staged): ByProjectKeyProductProjectionsByIDGet
    {
        return $this->withQueryParam('staged', $staged);
    }

}
