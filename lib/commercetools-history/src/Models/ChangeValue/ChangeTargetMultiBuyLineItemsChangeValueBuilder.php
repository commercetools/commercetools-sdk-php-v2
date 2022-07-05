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
 * @implements Builder<ChangeTargetMultiBuyLineItemsChangeValue>
 */
final class ChangeTargetMultiBuyLineItemsChangeValueBuilder implements Builder
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


    public function build(): ChangeTargetMultiBuyLineItemsChangeValue
    {
        return new ChangeTargetMultiBuyLineItemsChangeValueModel(
            $this->predicate,
            $this->triggerQuantity,
            $this->discountedQuantity,
            $this->maxOccurrence,
            $this->selectionMode
        );
    }

    public static function of(): ChangeTargetMultiBuyLineItemsChangeValueBuilder
    {
        return new self();
    }
}
