<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\CartDiscount\PatternComponentCollection;

interface ChangeTargetPatternChangeValue extends ChangeTargetChangeValue
{

    public const FIELD_TRIGGER_PATTERN = 'triggerPattern';
    public const FIELD_TARGET_PATTERN = 'targetPattern';
    public const FIELD_MAX_OCCURRENCE = 'maxOccurrence';
    public const FIELD_SELECTION_MODE = 'selectionMode';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Units of a (Custom) Line Item that triggered the discount application.</p>
     *

     * @return null|PatternComponentCollection
     */
    public function getTriggerPattern();

    /**
     * <p>Units of (Custom) Line Items on which the Discount is applied.</p>
     *

     * @return null|PatternComponentCollection
     */
    public function getTargetPattern();

    /**
     * <p>Maximum number of times the Discount applies on a Cart.</p>
     * <p>If empty, the Discount applies indefinitely.</p>
     *

     * @return null|int
     */
    public function getMaxOccurrence();

    /**
     * <p>Indicates which of the matching units of (Custom) Line Items were discounted.</p>
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
