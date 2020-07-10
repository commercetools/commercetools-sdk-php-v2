<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface AttributeType extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'name';
    public const FIELD_NAME = 'name';

    /**
     * @return null|string
     */
    public function getName();

}
