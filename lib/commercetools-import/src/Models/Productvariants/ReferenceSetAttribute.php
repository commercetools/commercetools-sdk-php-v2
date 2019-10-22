<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Import\Models\Common\KeyReferenceCollection;

interface ReferenceSetAttribute extends Attribute
{
    const FIELD_VALUE = 'value';

    /**
     * @return null|KeyReferenceCollection
     */
    public function getValue();

    public function setValue(?KeyReferenceCollection $value): void;
}
