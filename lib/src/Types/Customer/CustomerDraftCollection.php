<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerDraftCollection extends Collection
{
    /**
     * @param $index
     * @return CustomerDraft
     */
    public function at($index);

    /**
     * @return CustomerDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerDraft
     */
    public function map($data, $index);
}
