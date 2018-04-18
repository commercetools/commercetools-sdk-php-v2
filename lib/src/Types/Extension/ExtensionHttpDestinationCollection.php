<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionDestinationCollection;


interface ExtensionHttpDestinationCollection extends ExtensionDestinationCollection {
    /**
     * @param $index
     * @return ExtensionHttpDestination
     */
    public function at($index);

    /**
     * @return ExtensionHttpDestination
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionHttpDestination
     */
    public function map($data, $index);
}
