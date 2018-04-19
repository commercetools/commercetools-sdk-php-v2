<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateSetTransitionsActionCollection extends StateUpdateActionCollection
{
    /**
     * @param $index
     * @return StateSetTransitionsAction
     */
    public function at($index);

    /**
     * @return StateSetTransitionsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateSetTransitionsAction
     */
    public function map($data, $index);
}
