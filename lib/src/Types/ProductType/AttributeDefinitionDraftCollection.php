<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\Collection;

interface AttributeDefinitionDraftCollection extends Collection
{
    /**
     * @param $index
     * @return AttributeDefinitionDraft
     */
    public function at($index);

    /**
     * @return AttributeDefinitionDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeDefinitionDraft
     */
    public function map($data, $index);
}
