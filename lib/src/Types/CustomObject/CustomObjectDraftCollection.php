<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Base\Collection;

interface CustomObjectDraftCollection extends Collection
{
    /**
     * @param $index
     * @return CustomObjectDraft
     */
    public function at($index);

    /**
     * @return CustomObjectDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomObjectDraft
     */
    public function map($data, $index);
}
