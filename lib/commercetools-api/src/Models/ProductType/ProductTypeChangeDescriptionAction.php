<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangeDescriptionAction extends ProductTypeUpdateAction
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>New value to set.</p>
     *
     * @return null|string
     */
    public function getDescription();

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;
}
