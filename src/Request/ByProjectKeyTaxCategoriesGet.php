<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\TaxCategory\TaxCategoryPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyTaxCategoriesGet extends ApiRequest
{
    const RESULT_TYPE = TaxCategoryPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/tax-categories', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return TaxCategoryPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  TaxCategoryPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyTaxCategoriesGet
     */
    public function withExpand($expand): ByProjectKeyTaxCategoriesGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyTaxCategoriesGet
     */
    public function withWhere($where): ByProjectKeyTaxCategoriesGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyTaxCategoriesGet
     */
    public function withSort($sort): ByProjectKeyTaxCategoriesGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyTaxCategoriesGet
     */
    public function withLimit($limit): ByProjectKeyTaxCategoriesGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyTaxCategoriesGet
     */
    public function withOffset($offset): ByProjectKeyTaxCategoriesGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyTaxCategoriesGet
     */
    public function withWithTotal($withTotal): ByProjectKeyTaxCategoriesGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
