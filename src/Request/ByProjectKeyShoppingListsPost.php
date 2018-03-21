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
use Commercetools\Types\ShoppingList\ShoppingListDraft;


class ByProjectKeyShoppingListsPost extends ApiRequest
{
    const RESULT_TYPE = ShoppingList::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, ShoppingListDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/shopping-lists', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $expand
     * @return ByProjectKeyShoppingListsPost
     */
    public function withExpand($expand): ByProjectKeyShoppingListsPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
