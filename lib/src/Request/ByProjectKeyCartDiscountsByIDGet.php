<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\CartDiscount\CartDiscount;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCartDiscountsByIDGet extends ApiRequest
{
    const RESULT_TYPE = CartDiscount::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/cart-discounts/{ID}');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CartDiscount
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CartDiscount
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCartDiscountsByIDGet
     */
    public function withExpand($expand): ByProjectKeyCartDiscountsByIDGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
