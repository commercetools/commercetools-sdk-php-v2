<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Common\ResourceCollection;


interface ExtensionCollection extends ResourceCollection {
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
     * @param string $id
     * @return Extension
     */
    public function byId($id);
}
