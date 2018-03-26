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
use Commercetools\Types\DiscountCode\DiscountCodeDraft;


class ByProjectKeyDiscountCodesPost extends ApiRequest
{
    const RESULT_TYPE = DiscountCode::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, DiscountCodeDraft $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/discount-codes');
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
     * @return ByProjectKeyDiscountCodesPost
     */
    public function withExpand($expand): ByProjectKeyDiscountCodesPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
