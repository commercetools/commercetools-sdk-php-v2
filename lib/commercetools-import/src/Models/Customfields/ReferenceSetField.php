<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\KeyReferenceCollection;

interface ReferenceSetField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>JSON array of references, each referencing an existing resource by key.
     * The order of items in the array is not fixed.</p>
     *

     * @return null|KeyReferenceCollection
     */
    public function getValue();

    /**
     * @param ?KeyReferenceCollection $value
     */
    public function setValue(?KeyReferenceCollection $value): void;
}
