<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedPriceDraft extends JsonObject
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>Money value for the StagedPriceDraft.</p>
     *

     * @return null|TypedMoneyDraft
     */
    public function getValue();

    /**
     * @param ?TypedMoneyDraft $value
     */
    public function setValue(?TypedMoneyDraft $value): void;
}
