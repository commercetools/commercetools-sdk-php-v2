<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ShoppingListPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return ShoppingListCollection
     */
    public function getResults();

    /**
     * @param ShoppingListCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
