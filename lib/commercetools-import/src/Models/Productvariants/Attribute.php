<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObject;

interface Attribute extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'type';
    const FIELD_NAME = 'name';
    const FIELD_TYPE = 'type';

    /**
     * <p>For now we reuse this type in two different context. And that's why the name is required when used in the full import.
     * And why the name isn't required when used in patch.</p>.
     *
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getType();

    public function setName(?string $name): void;

    public function setType(?string $type): void;
}
