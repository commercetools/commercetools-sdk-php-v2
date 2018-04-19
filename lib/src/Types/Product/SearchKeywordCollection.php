<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface SearchKeywordCollection extends Collection
{
    /**
     * @param $index
     * @return SearchKeyword
     */
    public function at($index);

    /**
     * @return SearchKeyword
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SearchKeyword
     */
    public function map($data, $index);
}
