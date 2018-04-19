<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface CustomObjectPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return CustomObjectCollection
     */
    public function getResults();

    /**
     * @param CustomObjectCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
