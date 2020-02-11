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
 * @implements Builder<MultiBuyCustomLineItemsTarget>
 */
final class MultiBuyCustomLineItemsTargetBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $predicate;

    /**
     * @var ?int
     */
    private $triggerQuantity;

    /**
     * @var ?int
     */
    private $discountedQuantity;

    /**
     * @var ?int
     */
    private $maxOccurrence;

    /**
     * @var ?string
     */
    private $selectionMode;

    /**
     * <p>A valid custom line item target predicate. The discount will be applied to custom line items that are
     * matched by the predicate.</p>
     *
     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <p>Quantity of line items that need to be present in order to trigger an application of this discount.</p>
     *
     * @return null|int
     */
    public function getTriggerQuantity()
    {
        return $this->triggerQuantity;
    }

    /**
     * <p>Quantity of line items that are discounted per application of this discount.</p>
     *
     * @return null|int
     */
    public function getDiscountedQuantity()
    {
        return $this->discountedQuantity;
    }

    /**
     * <p>Maximum number of applications of this discount.</p>
     *
     * @return null|int
     */
    public function getMaxOccurrence()
    {
        return $this->maxOccurrence;
    }

    /**
     * @return null|string
     */
    public function getSelectionMode()
    {
        return $this->selectionMode;
    }

    /**
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTriggerQuantity(?int $triggerQuantity)
    {
        $this->triggerQuantity = $triggerQuantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedQuantity(?int $discountedQuantity)
    {
        $this->discountedQuantity = $discountedQuantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMaxOccurrence(?int $maxOccurrence)
    {
        $this->maxOccurrence = $maxOccurrence;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSelectionMode(?string $selectionMode)
    {
        $this->selectionMode = $selectionMode;

        return $this;
    }


    public function build(): MultiBuyCustomLineItemsTarget
    {
        return new MultiBuyCustomLineItemsTargetModel(
            $this->predicate,
            $this->triggerQuantity,
            $this->discountedQuantity,
            $this->maxOccurrence,
            $this->selectionMode
        );
    }

    public static function of(): MultiBuyCustomLineItemsTargetBuilder
    {
        return new self();
    }
}
