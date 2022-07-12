<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\OrderPatches\OrderPatchImportCollection;

interface OrderPatchImportRequest extends ImportRequest
{
    public const FIELD_PATCHES = 'patches';

    /**
     * <p>The order patches of this request</p>
     *

     * @return null|OrderPatchImportCollection
     */
    public function getPatches();

    /**
     * @param ?OrderPatchImportCollection $patches
     */
    public function setPatches(?OrderPatchImportCollection $patches): void;
}
