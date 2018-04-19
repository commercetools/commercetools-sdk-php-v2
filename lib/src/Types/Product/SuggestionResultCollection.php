<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface SuggestionResultCollection extends Collection
{
    /**
     * @param $index
     * @return SuggestionResult
     */
    public function at($index);

    /**
     * @return SuggestionResult
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SuggestionResult
     */
    public function map($data, $index);
}
