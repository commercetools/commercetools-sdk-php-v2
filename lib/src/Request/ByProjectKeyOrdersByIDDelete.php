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

class ByProjectKeyOrdersByIDDelete extends ApiRequest
{
    const RESULT_TYPE = Order::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/orders/%s', $projectKey, $ID);
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $version
     * @return ByProjectKeyOrdersByIDDelete
     */
    public function withVersion($version): ByProjectKeyOrdersByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyOrdersByIDDelete
     */
    public function withExpand($expand): ByProjectKeyOrdersByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
