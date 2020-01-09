<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Import\Models\Common\ImportResource;

interface ProductTypeImport extends ImportResource
{
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>Maps to <code>ProductType.name</code>.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>Maps to <code>ProductType.description</code>.</p>
     *
     * @return null|string
     */
    public function getDescription();

    /**
     * <p>The product type's attributes.</p>
     *
     * @return null|AttributeDefinitionCollection
     */
    public function getAttributes();

    public function setName(?string $name): void;

    public function setDescription(?string $description): void;

    public function setAttributes(?AttributeDefinitionCollection $attributes): void;
}
