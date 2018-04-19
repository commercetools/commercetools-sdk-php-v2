<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Base\Collection;

interface CategoryDraftCollection extends Collection
{
    /**
     * @param $index
     * @return CategoryDraft
     */
    public function at($index);

    /**
     * @return CategoryDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryDraft
     */
    public function map($data, $index);
}
