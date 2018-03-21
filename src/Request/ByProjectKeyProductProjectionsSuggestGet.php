<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductProjectionsSuggestGet extends ApiRequest
{
    const RESULT_TYPE = JsonObject::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/product-projections/suggest', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return JsonObject
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  JsonObject
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $fuzzy
     * @return ByProjectKeyProductProjectionsSuggestGet
     */
    public function withFuzzy($fuzzy): ByProjectKeyProductProjectionsSuggestGet
    {
        return $this->withQueryParam('fuzzy', $fuzzy);
    }
    /**
     * @param $staged
     * @return ByProjectKeyProductProjectionsSuggestGet
     */
    public function withStaged($staged): ByProjectKeyProductProjectionsSuggestGet
    {
        return $this->withQueryParam('staged', $staged);
    }
    /**
     * @param $searchKeywords
     * @return ByProjectKeyProductProjectionsSuggestGet
     */
    public function withSearchKeywords($locale, $searchKeywords): ByProjectKeyProductProjectionsSuggestGet
    {
        return $this->withQueryParam(sprintf('searchKeywords.null', $locale), $searchKeywords);
    }

}
