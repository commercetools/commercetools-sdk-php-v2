<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\KeyReference;

interface ReferenceAttribute extends Attribute
{

    public const FIELD_VALUE = 'value';

    /**
     * <p>References a resource by its key.</p>
     *
     * @return null|KeyReference
     */
    public function getValue();

    public function setValue(?KeyReference $value): void;
}
