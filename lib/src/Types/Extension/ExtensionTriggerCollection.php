<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\Collection;

interface ExtensionTriggerCollection extends Collection
{
    /**
     * @param $index
     * @return ExtensionTrigger
     */
    public function at($index);

    /**
     * @return ExtensionTrigger
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionTrigger
     */
    public function map($data, $index);
}
