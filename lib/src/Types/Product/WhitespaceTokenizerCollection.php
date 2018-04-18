<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\SuggestTokenizerCollection;


interface WhitespaceTokenizerCollection extends SuggestTokenizerCollection {
    /**
     * @param $index
     * @return WhitespaceTokenizer
     */
    public function at($index);

    /**
     * @return WhitespaceTokenizer
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return WhitespaceTokenizer
     */
    public function map($data, $index);
}
