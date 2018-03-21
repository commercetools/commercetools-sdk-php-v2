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
use Commercetools\Types\CartDiscount\CartDiscountDraft;


class ByProjectKeyCartDiscountsPost extends ApiRequest
{
    const RESULT_TYPE = CartDiscount::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, CartDiscountDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/cart-discounts', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @return ByProjectKeyCartDiscountsPost
     */
    public function withExpand($expand): ByProjectKeyCartDiscountsPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
