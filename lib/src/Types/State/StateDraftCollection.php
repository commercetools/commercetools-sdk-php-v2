<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Base\Collection;

interface StateDraftCollection extends Collection {
    /**
     * @param $index
     * @return StateDraft
     */
    public function at($index);

    /**
     * @return StateDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateDraft
     */
    public function map($data, $index);
}
