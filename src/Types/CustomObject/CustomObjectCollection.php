<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Base\Collection;

interface CustomObjectCollection extends Collection {
    /**
     * @param $index
     * @return CustomObject
     */
    public function at($index);

    /**
     * @return CustomObject
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomObject
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
