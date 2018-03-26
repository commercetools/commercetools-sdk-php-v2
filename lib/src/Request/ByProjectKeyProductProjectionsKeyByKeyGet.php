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

class ByProjectKeyProductProjectionsKeyByKeyGet extends ApiRequest
{
    const RESULT_TYPE = ProductProjection::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/product-projections/key={key}');
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
     * @return ByProjectKeyProductProjectionsKeyByKeyGet
     */
    public function withStaged($staged): ByProjectKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('staged', $staged);
    }

}
