<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantBulkUpdateSuccessResult extends VariantBulkUpdateResult
{
    public const FIELD_RESOURCE = 'resource';

    /**
     * <p>A lightweight reference containing the <code>id</code> and updated <code>version</code> of the Variant.</p>
     *

     * @return null|VariantBulkUpdateResource
     */
    public function getResource();

    /**
     * @param ?VariantBulkUpdateResource $resource
     */
    public function setResource(?VariantBulkUpdateResource $resource): void;
}
