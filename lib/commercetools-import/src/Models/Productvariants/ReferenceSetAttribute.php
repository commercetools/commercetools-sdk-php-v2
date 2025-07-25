<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\KeyReferenceCollection;

interface ReferenceSetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A set of references, each referencing a resource by key.
     * Each reference must match the key of an existing resource in the project.</p>
     *

     * @return null|KeyReferenceCollection
     */
    public function getValue();

    /**
     * @param ?KeyReferenceCollection $value
     */
    public function setValue(?KeyReferenceCollection $value): void;
}
