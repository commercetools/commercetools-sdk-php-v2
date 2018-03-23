<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface SuggestionCollection extends Collection {
    /**
     * @param $index
     * @return Suggestion
     */
    public function at($index);

    /**
     * @return Suggestion
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Suggestion
     */
    public function map($data, $index);
}
