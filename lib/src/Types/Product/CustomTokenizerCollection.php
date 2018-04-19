<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\SuggestTokenizerCollection;


interface CustomTokenizerCollection extends SuggestTokenizerCollection
{
    /**
     * @param $index
     * @return CustomTokenizer
     */
    public function at($index);

    /**
     * @return CustomTokenizer
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomTokenizer
     */
    public function map($data, $index);
}
