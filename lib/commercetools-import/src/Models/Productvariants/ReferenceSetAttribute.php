<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\KeyReferenceCollection;

interface ReferenceSetAttribute extends Attribute
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|KeyReferenceCollection
     */
    public function getValue();

    public function setValue(?KeyReferenceCollection $value): void;
}
