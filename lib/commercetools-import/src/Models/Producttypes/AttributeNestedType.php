<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Import\Models\Common\ImportReference;

interface AttributeNestedType extends AttributeType
{
    const FIELD_TYPE_REFERENCE = 'typeReference';

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getTypeReference();

    public function setTypeReference(?ImportReference $typeReference): void;
}
