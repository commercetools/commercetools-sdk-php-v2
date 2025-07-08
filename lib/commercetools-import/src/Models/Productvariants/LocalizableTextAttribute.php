<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\LocalizedString;

interface LocalizableTextAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A localized string.</p>
     *

     * @return null|LocalizedString
     */
    public function getValue();

    /**
     * @param ?LocalizedString $value
     */
    public function setValue(?LocalizedString $value): void;
}
