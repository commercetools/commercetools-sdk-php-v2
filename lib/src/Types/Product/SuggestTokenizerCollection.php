<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface SuggestTokenizerCollection extends Collection {
    /**
     * @param $index
     * @return SuggestTokenizer
     */
    public function at($index);

    /**
     * @return SuggestTokenizer
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SuggestTokenizer
     */
    public function map($data, $index);
}
