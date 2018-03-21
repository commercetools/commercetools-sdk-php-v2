<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ShoppingList\ShoppingListPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyShoppingListsGet extends ApiRequest
{
    const RESULT_TYPE = ShoppingListPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/shopping-lists', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ShoppingListPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ShoppingListPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyShoppingListsGet
     */
    public function withExpand($expand): ByProjectKeyShoppingListsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyShoppingListsGet
     */
    public function withWhere($where): ByProjectKeyShoppingListsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyShoppingListsGet
     */
    public function withSort($sort): ByProjectKeyShoppingListsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyShoppingListsGet
     */
    public function withLimit($limit): ByProjectKeyShoppingListsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyShoppingListsGet
     */
    public function withOffset($offset): ByProjectKeyShoppingListsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyShoppingListsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyShoppingListsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
