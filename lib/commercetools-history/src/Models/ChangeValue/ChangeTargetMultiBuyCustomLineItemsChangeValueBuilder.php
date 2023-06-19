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

/**
 * @implements Builder<ChangeTargetMultiBuyCustomLineItemsChangeValue>
 */
final class ChangeTargetMultiBuyCustomLineItemsChangeValueBuilder implements Builder
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
     * <p>Valid <a href="/../api/projects/predicates#customlineitem-field-identifiers">CustomLineItem target predicate</a>.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <p>Quantity of Custom Line Items that triggered the application of the discount.</p>
     *

     * @return null|int
     */
    public function getTriggerQuantity()
    {
        return $this->triggerQuantity;
    }

    /**
     * <p>Quantity of Custom Line Items discounted per application of this discount.</p>
     *

     * @return null|int
     */
    public function getDiscountedQuantity()
    {
        return $this->discountedQuantity;
    }

    /**
     * <p>Maximum number of times the discount is applicable.</p>
     *

     * @return null|int
     */
    public function getMaxOccurrence()
    {
        return $this->maxOccurrence;
    }

    /**
     * <p>SelectionMode based on which particular Custom Line Items were discounted.</p>
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


    public function build(): ChangeTargetMultiBuyCustomLineItemsChangeValue
    {
        return new ChangeTargetMultiBuyCustomLineItemsChangeValueModel(
            $this->predicate,
            $this->triggerQuantity,
            $this->discountedQuantity,
            $this->maxOccurrence,
            $this->selectionMode
        );
    }

    public static function of(): ChangeTargetMultiBuyCustomLineItemsChangeValueBuilder
    {
        return new self();
    }
}
