<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\UpdateCollection;


interface StateUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return StateUpdate
     */
    public function at($index);

    /**
     * @return StateUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateUpdate
     */
    public function map($data, $index);
}
