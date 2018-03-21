<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ProductType\ProductType;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductTypesByIDDelete extends ApiRequest
{
    const RESULT_TYPE = ProductType::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/product-types/%s', $projectKey, $ID);
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductType
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductType
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $version
     * @return ByProjectKeyProductTypesByIDDelete
     */
    public function withVersion($version): ByProjectKeyProductTypesByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyProductTypesByIDDelete
     */
    public function withExpand($expand): ByProjectKeyProductTypesByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
