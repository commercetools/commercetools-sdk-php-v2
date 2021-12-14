<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxCategoryChangeNameAction extends TaxCategoryUpdateAction
{
    public const FIELD_NAME = 'name';

    /**
     * <p>New value to set. Must not be empty.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;
}
