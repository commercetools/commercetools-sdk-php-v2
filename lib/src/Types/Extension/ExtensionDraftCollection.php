<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\Collection;

interface ExtensionDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ExtensionDraft
     */
    public function at($index);

    /**
     * @return ExtensionDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionDraft
     */
    public function map($data, $index);
}
