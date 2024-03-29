<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeTargetMultiBuyLineItemsChangeValue extends ChangeTargetChangeValue
{

    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_TRIGGER_QUANTITY = 'triggerQuantity';
    public const FIELD_DISCOUNTED_QUANTITY = 'discountedQuantity';
    public const FIELD_MAX_OCCURRENCE = 'maxOccurrence';
    public const FIELD_SELECTION_MODE = 'selectionMode';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Valid <a href="/../api/projects/predicates#lineitem-field-identifiers">LineItem target predicate</a>.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>Quantity of Line Items that triggered the application of the discount.</p>
     *

     * @return null|int
     */
    public function getTriggerQuantity();

    /**
     * <p>Quantity of Line Items discounted per application of this discount.</p>
     *

     * @return null|int
     */
    public function getDiscountedQuantity();

    /**
     * <p>Maximum number of times the discount is applicable.</p>
     *

     * @return null|int
     */
    public function getMaxOccurrence();

    /**
     * <p>SelectionMode based on which particular Line Items were discounted.</p>
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
