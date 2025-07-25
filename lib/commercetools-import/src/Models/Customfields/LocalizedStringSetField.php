<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\LocalizedStringCollection;

interface LocalizedStringSetField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>JSON array of localized strings.
     * The order of items in the array is not fixed.</p>
     *

     * @return null|LocalizedStringCollection
     */
    public function getValue();

    /**
     * @param ?LocalizedStringCollection $value
     */
    public function setValue(?LocalizedStringCollection $value): void;
}
