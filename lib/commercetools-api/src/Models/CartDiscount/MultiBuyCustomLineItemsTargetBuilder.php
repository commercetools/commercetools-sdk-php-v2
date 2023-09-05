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
     * <p>Valid <a href="/../api/projects/predicates#customlineitem-field-identifiers">CustomLineItems target predicate</a>. The Discount will be applied to Custom Line Items that are matched by the predicate.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <p>Number of Custom Line Items to be present in order to trigger an application of this Discount.</p>
     *

     * @return null|int
     */
    public function getTriggerQuantity()
    {
        return $this->triggerQuantity;
    }

    /**
     * <p>Number of Custom Line Items that are discounted per application of this Discount.
     * It must be less than or equal to the <code>triggerQuantity</code>.</p>
     *

     * @return null|int
     */
    public function getDiscountedQuantity()
    {
        return $this->discountedQuantity;
    }

    /**
     * <p>Maximum number of times this Discount can be applied.
     * Do not set if the Discount should be applied an unlimited number of times.</p>
     *

     * @return null|int
     */
    public function getMaxOccurrence()
    {
        return $this->maxOccurrence;
    }

    /**
     * <p>Discounts particular Line Items only according to the SelectionMode.</p>
     *

     * @return null|string
     */
    public function getSelectionMode()
    {
        return $this->selectionMode;
    }

    /**
     * @param ?string $predicate
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }

    /**
     * @param ?int $triggerQuantity
     * @return $this
     */
    public function withTriggerQuantity(?int $triggerQuantity)
    {
        $this->triggerQuantity = $triggerQuantity;

        return $this;
    }

    /**
     * @param ?int $discountedQuantity
     * @return $this
     */
    public function withDiscountedQuantity(?int $discountedQuantity)
    {
        $this->discountedQuantity = $discountedQuantity;

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
