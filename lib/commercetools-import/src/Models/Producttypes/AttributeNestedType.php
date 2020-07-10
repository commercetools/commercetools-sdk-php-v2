<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\ProductTypeKeyReference;

interface AttributeNestedType extends AttributeType
{

    public const FIELD_TYPE_REFERENCE = 'typeReference';

    /**
     * <p>References a product type by its key.</p>
     *
     * @return null|ProductTypeKeyReference
     */
    public function getTypeReference();

    public function setTypeReference(?ProductTypeKeyReference $typeReference): void;
}
