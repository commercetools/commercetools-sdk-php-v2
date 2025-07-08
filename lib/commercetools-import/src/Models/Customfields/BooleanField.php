<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BooleanField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p><code>true</code> or <code>false</code></p>
     *

     * @return null|bool
     */
    public function getValue();

    /**
     * @param ?bool $value
     */
    public function setValue(?bool $value): void;
}
