<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface CartPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return CartCollection
     */
    public function getResults();

    /**
     * @param CartCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
