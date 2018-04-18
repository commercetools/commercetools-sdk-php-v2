<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Base\Collection;

interface CustomerGroupDraftCollection extends Collection {
    /**
     * @param $index
     * @return CustomerGroupDraft
     */
    public function at($index);

    /**
     * @return CustomerGroupDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroupDraft
     */
    public function map($data, $index);
}
