<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ShoppingList\ShoppingList;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyShoppingListsKeyByKeyDelete extends ApiRequest
{
    const RESULT_TYPE = ShoppingList::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/shopping-lists/key={key}');
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ShoppingList
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ShoppingList
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $version
     * @return ByProjectKeyShoppingListsKeyByKeyDelete
     */
    public function withVersion($version): ByProjectKeyShoppingListsKeyByKeyDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyShoppingListsKeyByKeyDelete
     */
    public function withExpand($expand): ByProjectKeyShoppingListsKeyByKeyDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
