<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface OrderPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return OrderCollection
     */
    public function getResults();

    /**
     * @param OrderCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
