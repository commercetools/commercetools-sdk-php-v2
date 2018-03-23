<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\Collection;

interface ZoneCollection extends Collection {
    /**
     * @param $index
     * @return Zone
     */
    public function at($index);

    /**
     * @return Zone
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Zone
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
