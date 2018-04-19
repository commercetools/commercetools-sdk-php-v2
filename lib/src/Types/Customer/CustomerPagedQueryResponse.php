<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface CustomerPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return CustomerCollection
     */
    public function getResults();

    /**
     * @param CustomerCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
