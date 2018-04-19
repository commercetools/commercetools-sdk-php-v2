<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface CategoryPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return CategoryCollection
     */
    public function getResults();

    /**
     * @param CategoryCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
