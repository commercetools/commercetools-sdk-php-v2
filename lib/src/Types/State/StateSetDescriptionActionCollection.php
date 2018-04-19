<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateSetDescriptionActionCollection extends StateUpdateActionCollection
{
    /**
     * @param $index
     * @return StateSetDescriptionAction
     */
    public function at($index);

    /**
     * @return StateSetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateSetDescriptionAction
     */
    public function map($data, $index);
}
