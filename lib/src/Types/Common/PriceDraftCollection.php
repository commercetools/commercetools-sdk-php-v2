<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface PriceDraftCollection extends Collection {
    /**
     * @param $index
     * @return PriceDraft
     */
    public function at($index);

    /**
     * @return PriceDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PriceDraft
     */
    public function map($data, $index);
}
