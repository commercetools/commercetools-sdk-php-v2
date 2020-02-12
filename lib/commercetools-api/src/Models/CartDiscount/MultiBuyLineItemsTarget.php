<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MultiBuyLineItemsTarget extends CartDiscountTarget
{
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_TRIGGER_QUANTITY = 'triggerQuantity';
    public const FIELD_DISCOUNTED_QUANTITY = 'discountedQuantity';
    public const FIELD_MAX_OCCURRENCE = 'maxOccurrence';
    public const FIELD_SELECTION_MODE = 'selectionMode';

    /**
     * <p>A valid line item target predicate. The discount will be applied to line items that are matched by the predicate.</p>
     *
     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>Quantity of line items that need to be present in order to trigger an application of this discount.</p>
     *
     * @return null|int
     */
    public function getTriggerQuantity();

    /**
     * <p>Quantity of line items that are discounted per application of this discount.</p>
     *
     * @return null|int
     */
    public function getDiscountedQuantity();

    /**
     * <p>Maximum number of applications of this discount.</p>
     *
     * @return null|int
     */
    public function getMaxOccurrence();

    /**
     * @return null|string
     */
    public function getSelectionMode();

    public function setPredicate(?string $predicate): void;

    public function setTriggerQuantity(?int $triggerQuantity): void;

    public function setDiscountedQuantity(?int $discountedQuantity): void;

    public function setMaxOccurrence(?int $maxOccurrence): void;

    public function setSelectionMode(?string $selectionMode): void;
}
