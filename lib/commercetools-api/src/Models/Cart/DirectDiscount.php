<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountValue;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DirectDiscount extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VALUE = 'value';
    public const FIELD_TARGET = 'target';
    public const FIELD_PARTICIPATE_IN_BEST_DEAL_SELECTION = 'participateInBestDealSelection';

    /**
     * <p>Unique identifier of the Direct Discount.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Effect of the Discount on the Cart.</p>
     *

     * @return null|CartDiscountValue
     */
    public function getValue();

    /**
     * <p>Segment of the Cart that is discounted.</p>
     * <p>Absent if the <code>value</code> is <code>giftLineItem</code>.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * <ul>
     * <li>If <code>true</code>, Direct Discounts compete against Product Discounts to apply the <a href="/api/pricing-and-discounts-overview#best-deal">best deal</a>.</li>
     * <li>If <code>false</code>, Direct Discounts are ignored when calculating the best deal comparison, and are applied on top of the discount type that offers the best deal.</li>
     * </ul>
     * <p>This applies only when the <a href="ctp:api:type:DiscountCombinationMode">DiscountCombinationMode</a> for the <a href="ctp:api:type:Project">Project</a> is <code>BestDeal</code>.</p>
     *

     * @return null|bool
     */
    public function getParticipateInBestDealSelection();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?CartDiscountValue $value
     */
    public function setValue(?CartDiscountValue $value): void;

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void;

    /**
     * @param ?bool $participateInBestDealSelection
     */
    public function setParticipateInBestDealSelection(?bool $participateInBestDealSelection): void;
}
