<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ShippingMethod\ShippingMethod;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdate;


class ByProjectKeyShippingMethodsByIDPost extends ApiRequest
{
    const RESULT_TYPE = ShippingMethod::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, ShippingMethodUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s/shipping-methods/%s', $projectKey, $ID);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ShippingMethod
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ShippingMethod
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyShippingMethodsByIDPost
     */
    public function withExpand($expand): ByProjectKeyShippingMethodsByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
