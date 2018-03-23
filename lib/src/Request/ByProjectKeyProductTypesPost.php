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
use Commercetools\Types\ProductType\ProductTypeDraft;


class ByProjectKeyProductTypesPost extends ApiRequest
{
    const RESULT_TYPE = ProductType::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, ProductTypeDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/product-types', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $expand
     * @return ByProjectKeyProductTypesPost
     */
    public function withExpand($expand): ByProjectKeyProductTypesPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
