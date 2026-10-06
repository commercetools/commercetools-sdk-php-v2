<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DirectDiscountDraft extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_TARGET = 'target';
    public const FIELD_PARTICIPATE_IN_BEST_DEAL_SELECTION = 'participateInBestDealSelection';

    /**
     * <p>Defines the effect the Discount will have.</p>
     *

     * @return null|CartDiscountValueDraft
     */
    public function getValue();

    /**
     * <p>Defines what segment of the Cart will be discounted.</p>
     * <p>If <code>value</code> is set to <code>giftLineItem</code>, this must not be set.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * <ul>
     * <li>If set to <code>true</code>, Direct Discounts compete against Product Discounts to apply the <a href="/api/pricing-and-discounts-overview#best-deal">best deal</a>.</li>
     * <li>If set to <code>false</code>, Direct Discounts are ignored when calculating the best deal comparison, and are applied on top of the discount type that offers the best deal.</li>
     * </ul>
     * <p>This applies only when the <a href="ctp:api:type:DiscountCombinationMode">DiscountCombinationMode</a> for the <a href="ctp:api:type:Project">Project</a> is <code>BestDeal</code>.</p>
     *

     * @return null|bool
     */
    public function getParticipateInBestDealSelection();

    /**
     * @param ?CartDiscountValueDraft $value
     */
    public function setValue(?CartDiscountValueDraft $value): void;

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void;

    /**
     * @param ?bool $participateInBestDealSelection
     */
    public function setParticipateInBestDealSelection(?bool $participateInBestDealSelection): void;
}
