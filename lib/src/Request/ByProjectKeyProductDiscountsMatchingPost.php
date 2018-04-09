<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ProductDiscount\ProductDiscount;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\ProductDiscount\ProductDiscountMatchQuery;


class ByProjectKeyProductDiscountsMatchingPost extends ApiRequest
{
    const RESULT_TYPE = ProductDiscount::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, ProductDiscountMatchQuery $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/product-discounts/matching');
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductDiscount
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductDiscount
    {
        return parent::map($response, $mapper);
    }

}
