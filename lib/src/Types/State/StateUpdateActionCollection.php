<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Base\Collection;

interface StateUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return StateUpdateAction
     */
    public function at($index);

    /**
     * @return StateUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateUpdateAction
     */
    public function map($data, $index);
}
