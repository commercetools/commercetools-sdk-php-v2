<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionUpdateActionCollection;


interface ExtensionChangeDestinationActionCollection extends ExtensionUpdateActionCollection {
    /**
     * @param $index
     * @return ExtensionChangeDestinationAction
     */
    public function at($index);

    /**
     * @return ExtensionChangeDestinationAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionChangeDestinationAction
     */
    public function map($data, $index);
}
