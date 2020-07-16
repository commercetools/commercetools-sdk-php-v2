<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;

interface AttributeNestedType extends AttributeType
{
    public const FIELD_TYPE_REFERENCE = 'typeReference';

    /**
     * <p>References a product type by its key.</p>
     *
     * @return null|ProductTypeKeyReference
     */
    public function getTypeReference();

    /**
     * @param ?ProductTypeKeyReference $typeReference
     */
    public function setTypeReference(?ProductTypeKeyReference $typeReference): void;
}
