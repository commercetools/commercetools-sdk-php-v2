<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\Collection;

interface ShoppingListDraftCollection extends Collection {
    /**
     * @param $index
     * @return ShoppingListDraft
     */
    public function at($index);

    /**
     * @return ShoppingListDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListDraft
     */
    public function map($data, $index);
}
