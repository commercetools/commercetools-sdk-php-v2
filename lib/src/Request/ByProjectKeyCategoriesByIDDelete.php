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

class ByProjectKeyCategoriesByIDDelete extends ApiRequest
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
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/categories/{ID}');
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $version
     * @return ByProjectKeyCategoriesByIDDelete
     */
    public function withVersion($version): ByProjectKeyCategoriesByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyCategoriesByIDDelete
     */
    public function withExpand($expand): ByProjectKeyCategoriesByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
