<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\Collection;

interface ExtensionUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return ExtensionUpdateAction
     */
    public function at($index);

    /**
     * @return ExtensionUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionUpdateAction
     */
    public function map($data, $index);
}
