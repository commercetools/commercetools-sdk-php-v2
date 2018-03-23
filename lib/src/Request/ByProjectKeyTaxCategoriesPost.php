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
use Commercetools\Types\TaxCategory\TaxCategoryDraft;


class ByProjectKeyTaxCategoriesPost extends ApiRequest
{
    const RESULT_TYPE = TaxCategory::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, TaxCategoryDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/tax-categories', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @return ByProjectKeyTaxCategoriesPost
     */
    public function withExpand($expand): ByProjectKeyTaxCategoriesPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
