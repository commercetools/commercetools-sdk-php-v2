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
use Commercetools\History\Models\ChangeValue\CustomFieldExpandedValue;
use Commercetools\History\Models\ChangeValue\CustomFieldExpandedValueBuilder;

/**
 * @implements Builder<AddInterfaceInteractionChange>
 */
final class AddInterfaceInteractionChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|CustomFieldExpandedValue|CustomFieldExpandedValueBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>addInterfaceInteraction</code> on payments</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Only available if <code>expand</code> is set to true</p>
     *
     * @return null|CustomFieldExpandedValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomFieldExpandedValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?CustomFieldExpandedValue $nextValue
     * @return $this
     */
    public function withNextValue(?CustomFieldExpandedValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?CustomFieldExpandedValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddInterfaceInteractionChange
    {
        return new AddInterfaceInteractionChangeModel(
            $this->change,
            $this->nextValue instanceof CustomFieldExpandedValueBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddInterfaceInteractionChangeBuilder
    {
        return new self();
    }
}
