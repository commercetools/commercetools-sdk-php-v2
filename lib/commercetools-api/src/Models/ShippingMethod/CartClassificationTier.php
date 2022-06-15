<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartClassificationTier extends ShippingRatePriceTier
{
    public const FIELD_VALUE = 'value';
    public const FIELD_PRICE = 'price';
    public const FIELD_IS_MATCHING = 'isMatching';

    /**
     * <p><code>key</code> selected from the <code>values</code> of the <a href="/projects/project#cartclassificationtype">CartClassificationType</a> configured in the Project.</p>
     *
     * @return null|string
     */
    public function getValue();

    /**
     * <p>Fixed shipping rate for the selected classification.</p>
     *
     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>Appears in response to <a href="#get-shippingmethods-for-a-cart">Get ShippingMethods for a Cart</a> if the shipping rate matches the search query.</p>
     *
     * @return null|bool
     */
    public function getIsMatching();

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void;

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void;
}
