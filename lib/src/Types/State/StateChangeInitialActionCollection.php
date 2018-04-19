<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateChangeInitialActionCollection extends StateUpdateActionCollection
{
    /**
     * @param $index
     * @return StateChangeInitialAction
     */
    public function at($index);

    /**
     * @return StateChangeInitialAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateChangeInitialAction
     */
    public function map($data, $index);
}
