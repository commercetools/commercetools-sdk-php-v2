<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Order\Order;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyOrdersOrderNumberByOrderNumberGet extends ApiRequest
{
    const RESULT_TYPE = Order::class;

    /**
     * @param $projectKey
     * @param $orderNumber
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $orderNumber, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{orderNumber}'], [$projectKey, $orderNumber], '/{projectKey}/orders/order-number={orderNumber}');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Order
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Order
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyOrdersOrderNumberByOrderNumberGet
     */
    public function withExpand($expand): ByProjectKeyOrdersOrderNumberByOrderNumberGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
