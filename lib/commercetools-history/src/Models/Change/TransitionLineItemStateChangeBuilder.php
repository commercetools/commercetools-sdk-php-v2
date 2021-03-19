<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\ItemStateCollection;

/**
 * @implements Builder<TransitionLineItemStateChange>
 */
final class TransitionLineItemStateChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var ?string
     */
    private $stateId;

    /**
     * @var ?ItemStateCollection
     */
    private $nextValue;

    /**
     * @var ?ItemStateCollection
     */
    private $previousValue;

    /**
     * <p>Update action for <code>transitionLineItemState</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|string
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?string $stateId
     * @return $this
     */
    public function withStateId(?string $stateId)
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * @param ?ItemStateCollection $nextValue
     * @return $this
     */
    public function withNextValue(?ItemStateCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ItemStateCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?ItemStateCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }


    public function build(): TransitionLineItemStateChange
    {
        return new TransitionLineItemStateChangeModel(
            $this->change,
            $this->lineItemId,
            $this->stateId,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): TransitionLineItemStateChangeBuilder
    {
        return new self();
    }
}
