<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface TaxCategoryPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return TaxCategoryCollection
     */
    public function getResults();

    /**
     * @param TaxCategoryCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
