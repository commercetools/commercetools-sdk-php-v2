<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface EnumValue extends JsonObject
{

    public const FIELD_KEY = 'key';
    public const FIELD_LABEL = 'label';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getLabel();

    public function setKey(?string $key): void;

    public function setLabel(?string $label): void;
}
