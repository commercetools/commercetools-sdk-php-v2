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
     * @return null|string
     */
    public function getDescription();

    public function setDescription(?string $description): void;
}
