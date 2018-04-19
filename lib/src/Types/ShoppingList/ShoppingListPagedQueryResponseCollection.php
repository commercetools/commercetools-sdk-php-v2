<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\PagedQueryResponseCollection;


interface ShoppingListPagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return ShoppingListPagedQueryResponse
     */
    public function at($index);

    /**
     * @return ShoppingListPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListPagedQueryResponse
     */
    public function map($data, $index);
}
