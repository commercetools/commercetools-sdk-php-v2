<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface CustomField extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';

    /**
     * <p>The type of this field.</p>
     *
     * @return null|string
     */
    public function getType();

}
