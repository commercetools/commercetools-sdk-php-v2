<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeRemoveAttributeDefinitionAction extends ProductTypeUpdateAction
{
    public const FIELD_NAME = 'name';

    /**
     * <p>Name of the Attribute to remove.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;
}
