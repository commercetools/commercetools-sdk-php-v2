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
     * @return null|string
     */
    public function getName();

    public function setName(?string $name): void;
}
