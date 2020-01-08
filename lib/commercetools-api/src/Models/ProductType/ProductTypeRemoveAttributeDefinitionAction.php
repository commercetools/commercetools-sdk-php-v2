<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

interface ProductTypeRemoveAttributeDefinitionAction extends ProductTypeUpdateAction
{
    const FIELD_NAME = 'name';

    /**
     * <p>The name of the attribute to remove.</p>.
     *
     * @return null|string
     */
    public function getName();

    public function setName(?string $name): void;
}
