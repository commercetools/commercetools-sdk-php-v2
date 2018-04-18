<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionUpdateActionCollection;


interface ExtensionSetKeyActionCollection extends ExtensionUpdateActionCollection {
    /**
     * @param $index
     * @return ExtensionSetKeyAction
     */
    public function at($index);

    /**
     * @return ExtensionSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionSetKeyAction
     */
    public function map($data, $index);
}
