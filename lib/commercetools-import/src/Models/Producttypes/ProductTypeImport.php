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
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getDescription();

    /**
     * @return null|AttributeDefinitionCollection
     */
    public function getAttributes();

    public function setName(?string $name): void;

    public function setDescription(?string $description): void;

    public function setAttributes(?AttributeDefinitionCollection $attributes): void;
}
