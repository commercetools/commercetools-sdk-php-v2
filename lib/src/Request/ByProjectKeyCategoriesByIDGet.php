<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Category\Category;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCategoriesByIDGet extends ApiRequest
{
    const RESULT_TYPE = Category::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/categories/%s', $projectKey, $ID);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Category
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Category
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCategoriesByIDGet
     */
    public function withExpand($expand): ByProjectKeyCategoriesByIDGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
