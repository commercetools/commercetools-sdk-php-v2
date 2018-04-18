<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateSetNameActionCollection extends StateUpdateActionCollection {
    /**
     * @param $index
     * @return StateSetNameAction
     */
    public function at($index);

    /**
     * @return StateSetNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateSetNameAction
     */
    public function map($data, $index);
}
