<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ShippingMethod\ShippingMethodPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyShippingMethodsGet extends ApiRequest
{
    const RESULT_TYPE = ShippingMethodPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/shipping-methods', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ShippingMethodPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ShippingMethodPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $cartId
     * @return ByProjectKeyShippingMethodsGet
     */
    public function withCartId($cartId): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('cartId', $cartId);
    }
    /**
     * @param $country
     * @return ByProjectKeyShippingMethodsGet
     */
    public function withCountry($country): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('country', $country);
    }
    /**
     * @param $state
     * @return ByProjectKeyShippingMethodsGet
     */
    public function withState($state): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('state', $state);
    }
    /**
     * @param $currency
     * @return ByProjectKeyShippingMethodsGet
     */
    public function withCurrency($currency): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('currency', $currency);
    }

}
