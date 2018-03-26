<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\DiscountCode\DiscountCode;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\DiscountCode\DiscountCodeUpdate;


class ByProjectKeyDiscountCodesByIDPost extends ApiRequest
{
    const RESULT_TYPE = DiscountCode::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, DiscountCodeUpdate $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/discount-codes/{ID}');
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return DiscountCode
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  DiscountCode
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyDiscountCodesByIDPost
     */
    public function withExpand($expand): ByProjectKeyDiscountCodesByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
