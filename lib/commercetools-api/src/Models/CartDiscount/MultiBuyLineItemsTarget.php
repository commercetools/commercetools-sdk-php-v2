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
     * <p>Valid <a href="/../api/projects/predicates#lineitem-field-identifiers">LineItem target predicate</a>. The Discount will be applied to Line Items that are matched by the predicate.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>Number of Line Items to be present in order to trigger an application of this Discount.</p>
     *

     * @return null|int
     */
    public function getTriggerQuantity();

    /**
     * <p>Number of Line Items that are discounted per application of this Discount.</p>
     *

     * @return null|int
     */
    public function getDiscountedQuantity();

    /**
     * <p>Maximum number of times this Discount can be applied.</p>
     *

     * @return null|int
     */
    public function getMaxOccurrence();

    /**
     * <p>Discounts particular Line Items only according to the SelectionMode.</p>
     *

     * @return null|string
     */
    public function getSelectionMode();

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;

    /**
     * @param ?int $triggerQuantity
     */
    public function setTriggerQuantity(?int $triggerQuantity): void;

    /**
     * @param ?int $discountedQuantity
     */
    public function setDiscountedQuantity(?int $discountedQuantity): void;

    /**
     * @param ?int $maxOccurrence
     */
    public function setMaxOccurrence(?int $maxOccurrence): void;

    /**
     * @param ?string $selectionMode
     */
    public function setSelectionMode(?string $selectionMode): void;
}
