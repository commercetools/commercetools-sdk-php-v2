<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface SearchKeywordsCollection extends Collection
{
    /**
     * @param $index
     * @return SearchKeywords
     */
    public function at($index);

    /**
     * @return SearchKeywords
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SearchKeywords
     */
    public function map($data, $index);
}
