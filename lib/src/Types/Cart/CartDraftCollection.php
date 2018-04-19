<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface CartDraftCollection extends Collection
{
    /**
     * @param $index
     * @return CartDraft
     */
    public function at($index);

    /**
     * @return CartDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDraft
     */
    public function map($data, $index);
}
