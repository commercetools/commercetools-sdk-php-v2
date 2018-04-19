<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionUpdateActionCollection;


interface ExtensionChangeTriggersActionCollection extends ExtensionUpdateActionCollection
{
    /**
     * @param $index
     * @return ExtensionChangeTriggersAction
     */
    public function at($index);

    /**
     * @return ExtensionChangeTriggersAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionChangeTriggersAction
     */
    public function map($data, $index);
}
