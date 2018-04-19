<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateChangeKeyActionCollection extends StateUpdateActionCollection
{
    /**
     * @param $index
     * @return StateChangeKeyAction
     */
    public function at($index);

    /**
     * @return StateChangeKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateChangeKeyAction
     */
    public function map($data, $index);
}
