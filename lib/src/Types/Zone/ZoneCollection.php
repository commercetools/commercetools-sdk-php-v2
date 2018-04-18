<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Common\ResourceCollection;


interface ZoneCollection extends ResourceCollection {
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
     * @param string $id
     * @return Zone
     */
    public function byId($id);
}
