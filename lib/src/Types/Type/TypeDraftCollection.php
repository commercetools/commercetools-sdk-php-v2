<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\Collection;

interface TypeDraftCollection extends Collection
{
    /**
     * @param $index
     * @return TypeDraft
     */
    public function at($index);

    /**
     * @return TypeDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeDraft
     */
    public function map($data, $index);
}
