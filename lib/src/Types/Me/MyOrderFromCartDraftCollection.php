<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\Collection;

interface MyOrderFromCartDraftCollection extends Collection {
    /**
     * @param $index
     * @return MyOrderFromCartDraft
     */
    public function at($index);

    /**
     * @return MyOrderFromCartDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MyOrderFromCartDraft
     */
    public function map($data, $index);
}
