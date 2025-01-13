<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\CartDiscount\PatternComponentCollection;

/**
 * @implements Builder<ChangeTargetPatternChangeValue>
 */
final class ChangeTargetPatternChangeValueBuilder implements Builder
{
    /**

     * @var ?PatternComponentCollection
     */
    private $triggerPattern;

    /**

     * @var ?PatternComponentCollection
     */
    private $targetPattern;

    /**

     * @var ?int
     */
    private $maxOccurrence;

    /**

     * @var ?string
     */
    private $selectionMode;

    /**
     * <p>Defines the set of units of (Custom) Line Items in a Cart that triggered the discount application.</p>
     *

     * @return null|PatternComponentCollection
     */
    public function getTriggerPattern()
    {
        return $this->triggerPattern;
    }

    /**
     * <p>Defines the set of units of (Custom) Line Items in a Cart on which the Discount is applied.</p>
     *

     * @return null|PatternComponentCollection
     */
    public function getTargetPattern()
    {
        return $this->targetPattern;
    }

    /**
     * <p>Maximum number of times the Discount applies on a Cart.</p>
     * <p>If empty, the Discount applies indefinitely.</p>
     *

     * @return null|int
     */
    public function getMaxOccurrence()
    {
        return $this->maxOccurrence;
    }

    /**
     * <p>Indicates which of the matching units of (Custom) Line Items were discounted.</p>
     *

     * @return null|string
     */
    public function getSelectionMode()
    {
        return $this->selectionMode;
    }

    /**
     * @param ?PatternComponentCollection $triggerPattern
     * @return $this
     */
    public function withTriggerPattern(?PatternComponentCollection $triggerPattern)
    {
        $this->triggerPattern = $triggerPattern;

        return $this;
    }

    /**
     * @param ?PatternComponentCollection $targetPattern
     * @return $this
     */
    public function withTargetPattern(?PatternComponentCollection $targetPattern)
    {
        $this->targetPattern = $targetPattern;

        return $this;
    }

    /**
     * @param ?int $maxOccurrence
     * @return $this
     */
    public function withMaxOccurrence(?int $maxOccurrence)
    {
        $this->maxOccurrence = $maxOccurrence;

        return $this;
    }

    /**
     * @param ?string $selectionMode
     * @return $this
     */
    public function withSelectionMode(?string $selectionMode)
    {
        $this->selectionMode = $selectionMode;

        return $this;
    }


    public function build(): ChangeTargetPatternChangeValue
    {
        return new ChangeTargetPatternChangeValueModel(
            $this->triggerPattern,
            $this->targetPattern,
            $this->maxOccurrence,
            $this->selectionMode
        );
    }

    public static function of(): ChangeTargetPatternChangeValueBuilder
    {
        return new self();
    }
}
