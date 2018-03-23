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
use Commercetools\Types\Order\OrderImportDraft;


class ByProjectKeyOrdersImportPost extends ApiRequest
{
    const RESULT_TYPE = Order::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, OrderImportDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/orders/import', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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

}
