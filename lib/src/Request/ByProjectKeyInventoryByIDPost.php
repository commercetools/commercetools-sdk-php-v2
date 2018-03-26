<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Inventory\InventoryEntry;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Inventory\InventoryEntryUpdate;


class ByProjectKeyInventoryByIDPost extends ApiRequest
{
    const RESULT_TYPE = InventoryEntry::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, InventoryEntryUpdate $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/inventory/{ID}');
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return InventoryEntry
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  InventoryEntry
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyInventoryByIDPost
     */
    public function withExpand($expand): ByProjectKeyInventoryByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
