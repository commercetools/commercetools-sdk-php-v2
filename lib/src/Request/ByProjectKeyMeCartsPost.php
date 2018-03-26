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
use Commercetools\Types\Me\MyCartDraft;


class ByProjectKeyMeCartsPost extends ApiRequest
{
    const RESULT_TYPE = Cart::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, MyCartDraft $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/me/carts');
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
     * @return ByProjectKeyMeCartsPost
     */
    public function withExpand($expand): ByProjectKeyMeCartsPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
