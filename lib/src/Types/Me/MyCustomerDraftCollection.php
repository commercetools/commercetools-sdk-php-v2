<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\Collection;

interface MyCustomerDraftCollection extends Collection {
    /**
     * @param $index
     * @return MyCustomerDraft
     */
    public function at($index);

    /**
     * @return MyCustomerDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MyCustomerDraft
     */
    public function map($data, $index);
}
