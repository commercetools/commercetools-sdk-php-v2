<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Product\Product;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductsKeyByKeyDelete extends ApiRequest
{
    const RESULT_TYPE = Product::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/products/key={key}');
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Product
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Product
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $version
     * @return ByProjectKeyProductsKeyByKeyDelete
     */
    public function withVersion($version): ByProjectKeyProductsKeyByKeyDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyProductsKeyByKeyDelete
     */
    public function withExpand($expand): ByProjectKeyProductsKeyByKeyDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
