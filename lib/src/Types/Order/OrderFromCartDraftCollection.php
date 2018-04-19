<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface OrderFromCartDraftCollection extends Collection
{
    /**
     * @param $index
     * @return OrderFromCartDraft
     */
    public function at($index);

    /**
     * @return OrderFromCartDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderFromCartDraft
     */
    public function map($data, $index);
}
