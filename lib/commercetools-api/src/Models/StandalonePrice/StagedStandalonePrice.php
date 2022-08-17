<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedStandalonePrice extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_DISCOUNTED = 'discounted';

    /**
     * <p>Money value of the StagedStandalonePrice.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Discounted price for the StagedStandalonePrice.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void;
}
