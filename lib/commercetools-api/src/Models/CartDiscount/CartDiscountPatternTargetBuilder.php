<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountPatternTarget>
 */
final class CartDiscountPatternTargetBuilder implements Builder
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
     * <p>Units of a (Custom) Line Item that trigger a discount application.</p>
     * <p>Based on the availability of matching units, the <code>triggerPattern</code> can match multiple times, effecting the number of times the discount will be applied.
     * To further limit the discount application, set the <code>maxOccurrence</code>.</p>
     * <p>If empty or not set, the Discount will apply indefinitely.</p>
     *

     * @return null|PatternComponentCollection
     */
    public function getTriggerPattern()
    {
        return $this->triggerPattern;
    }

    /**
     * <p>Units of (Custom) Line Items on which the Discount is applied.</p>
     * <p>Based on the availability of matching units and the limits from the <code>triggerPattern</code> or <code>maxOccurence</code>, the <code>targetPattern</code> can match multiple times.</p>
     *

     * @return null|PatternComponentCollection
     */
    public function getTargetPattern()
    {
        return $this->targetPattern;
    }

    /**
     * <p>Maximum number of times the Discount can apply on a Cart.</p>
     * <p>If empty or not set, the Discount will apply indefinitely.</p>
     *

     * @return null|int
     */
    public function getMaxOccurrence()
    {
        return $this->maxOccurrence;
    }

    /**
     * <p>Determines which of the matching units of (Custom) Line Items are discounted.</p>
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


    public function build(): CartDiscountPatternTarget
    {
        return new CartDiscountPatternTargetModel(
            $this->triggerPattern,
            $this->targetPattern,
            $this->maxOccurrence,
            $this->selectionMode
        );
    }

    public static function of(): CartDiscountPatternTargetBuilder
    {
        return new self();
    }
}
