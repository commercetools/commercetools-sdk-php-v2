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

class ByProjectKeyDiscountCodesByIDDelete extends ApiRequest
{
    const RESULT_TYPE = DiscountCode::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/discount-codes/%s', $projectKey, $ID);
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $version
     * @return ByProjectKeyDiscountCodesByIDDelete
     */
    public function withVersion($version): ByProjectKeyDiscountCodesByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyDiscountCodesByIDDelete
     */
    public function withExpand($expand): ByProjectKeyDiscountCodesByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
