<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxCategorySetDescriptionAction extends TaxCategoryUpdateAction
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     * @return null|string
     */
    public function getDescription();

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;
}
