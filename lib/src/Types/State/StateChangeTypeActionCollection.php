<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateChangeTypeActionCollection extends StateUpdateActionCollection
{
    /**
     * @param $index
     * @return StateChangeTypeAction
     */
    public function at($index);

    /**
     * @return StateChangeTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateChangeTypeAction
     */
    public function map($data, $index);
}
