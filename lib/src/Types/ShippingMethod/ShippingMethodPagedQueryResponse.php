<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ShippingMethodPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return ShippingMethodCollection
     */
    public function getResults();

    /**
     * @param ShippingMethodCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
