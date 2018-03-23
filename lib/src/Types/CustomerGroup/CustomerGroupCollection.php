<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Base\Collection;

interface CustomerGroupCollection extends Collection {
    /**
     * @param $index
     * @return CustomerGroup
     */
    public function at($index);

    /**
     * @return CustomerGroup
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroup
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
