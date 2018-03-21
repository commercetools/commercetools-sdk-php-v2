<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\Collection;

interface ExtensionCollection extends Collection {
    /**
     * @param $index
     * @return Extension
     */
    public function at($index);

    /**
     * @return Extension
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Extension
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
