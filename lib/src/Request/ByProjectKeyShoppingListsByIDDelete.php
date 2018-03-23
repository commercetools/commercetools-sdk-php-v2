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

class ByProjectKeyShoppingListsByIDDelete extends ApiRequest
{
    const RESULT_TYPE = ShoppingList::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/shopping-lists/%s', $projectKey, $ID);
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
     * @return ByProjectKeyShoppingListsByIDDelete
     */
    public function withVersion($version): ByProjectKeyShoppingListsByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyShoppingListsByIDDelete
     */
    public function withExpand($expand): ByProjectKeyShoppingListsByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
