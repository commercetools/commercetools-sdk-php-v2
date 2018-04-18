<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\Collection;

interface ExtensionDestinationCollection extends Collection {
    /**
     * @param $index
     * @return ExtensionDestination
     */
    public function at($index);

    /**
     * @return ExtensionDestination
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionDestination
     */
    public function map($data, $index);
}
