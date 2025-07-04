<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\LocalizedStringCollection;

interface LocalizableTextSetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A set of localized strings.</p>
     *

     * @return null|LocalizedStringCollection
     */
    public function getValue();

    /**
     * @param ?LocalizedStringCollection $value
     */
    public function setValue(?LocalizedStringCollection $value): void;
}
