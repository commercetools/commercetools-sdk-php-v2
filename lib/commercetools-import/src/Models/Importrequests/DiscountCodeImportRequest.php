<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\DiscountCodes\DiscountCodeImportCollection;

interface DiscountCodeImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The Discount Code import resources of this request.</p>
     *

     * @return null|DiscountCodeImportCollection
     */
    public function getResources();

    /**
     * @param ?DiscountCodeImportCollection $resources
     */
    public function setResources(?DiscountCodeImportCollection $resources): void;
}
