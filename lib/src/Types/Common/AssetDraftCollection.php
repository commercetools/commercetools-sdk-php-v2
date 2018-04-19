<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface AssetDraftCollection extends Collection
{
    /**
     * @param $index
     * @return AssetDraft
     */
    public function at($index);

    /**
     * @return AssetDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AssetDraft
     */
    public function map($data, $index);
}
