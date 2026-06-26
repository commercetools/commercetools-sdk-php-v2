<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Variants\VariantImportCollection;

interface VariantImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The Variant import resources of this request.</p>
     *

     * @return null|VariantImportCollection
     */
    public function getResources();

    /**
     * @param ?VariantImportCollection $resources
     */
    public function setResources(?VariantImportCollection $resources): void;
}
