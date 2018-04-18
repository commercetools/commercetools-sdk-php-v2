<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface LocalizedStringCollection extends Collection {
    /**
     * @param $index
     * @return LocalizedString
     */
    public function at($index);

    /**
     * @return LocalizedString
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return LocalizedString
     */
    public function map($data, $index);
}
