<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\TaxCategory\TaxCategory;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyTaxCategoriesByIDGet extends ApiRequest
{
    const RESULT_TYPE = TaxCategory::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/tax-categories/{ID}');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return TaxCategory
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  TaxCategory
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyTaxCategoriesByIDGet
     */
    public function withExpand($expand): ByProjectKeyTaxCategoriesByIDGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
