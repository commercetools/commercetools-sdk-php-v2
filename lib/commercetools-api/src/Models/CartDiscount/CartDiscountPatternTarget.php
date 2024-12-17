<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountPatternTarget extends CartDiscountTarget
{
    public const FIELD_TRIGGER_PATTERN = 'triggerPattern';
    public const FIELD_TARGET_PATTERN = 'targetPattern';
    public const FIELD_MAX_OCCURRENCE = 'maxOccurrence';
    public const FIELD_SELECTION_MODE = 'selectionMode';

    /**
     * <p>Units of a (Custom) Line Item that trigger a discount application.</p>
     * <p>Based on the availability of matching units, the <code>triggerPattern</code> can match multiple times, effecting the number of times the discount will be applied.
     * To further limit the discount application, set the <code>maxOccurrence</code>.</p>
     * <p>If empty or not set, the Discount will apply indefinitely.</p>
     *

     * @return null|PatternComponentCollection
     */
    public function getTriggerPattern();

    /**
     * <p>Units of (Custom) Line Items on which the Discount is applied.</p>
     * <p>Based on the availability of matching units and the limits from the <code>triggerPattern</code> or <code>maxOccurence</code>, the <code>targetPattern</code> can match multiple times.</p>
     *

     * @return null|PatternComponentCollection
     */
    public function getTargetPattern();

    /**
     * <p>Maximum number of times the Discount can apply on a Cart.</p>
     * <p>If empty or not set, the Discount will apply indefinitely.</p>
     *

     * @return null|int
     */
    public function getMaxOccurrence();

    /**
     * <p>Determines which of the matching units of (Custom) Line Items are discounted.</p>
     *

     * @return null|string
     */
    public function getSelectionMode();

    /**
     * @param ?PatternComponentCollection $triggerPattern
     */
    public function setTriggerPattern(?PatternComponentCollection $triggerPattern): void;

    /**
     * @param ?PatternComponentCollection $targetPattern
     */
    public function setTargetPattern(?PatternComponentCollection $targetPattern): void;

    /**
     * @param ?int $maxOccurrence
     */
    public function setMaxOccurrence(?int $maxOccurrence): void;

    /**
     * @param ?string $selectionMode
     */
    public function setSelectionMode(?string $selectionMode): void;
}
