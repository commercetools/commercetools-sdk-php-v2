<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Cart\Cart;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Cart\CartDraft;


class ByProjectKeyCartsPost extends ApiRequest
{
    const RESULT_TYPE = Cart::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, CartDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/carts', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Cart
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Cart
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCartsPost
     */
    public function withExpand($expand): ByProjectKeyCartsPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
