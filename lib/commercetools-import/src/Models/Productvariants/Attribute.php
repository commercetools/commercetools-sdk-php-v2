<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Attribute extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * <p>The name of this attribute must match a name of the product types attribute definitions.
     * The name is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;
}
