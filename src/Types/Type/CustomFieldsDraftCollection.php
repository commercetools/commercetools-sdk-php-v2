<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\Collection;

interface CustomFieldsDraftCollection extends Collection {
    /**
     * @param $index
     * @return CustomFieldsDraft
     */
    public function at($index);

    /**
     * @return CustomFieldsDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldsDraft
     */
    public function map($data, $index);
}
