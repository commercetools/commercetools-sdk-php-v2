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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<SetCustomLineItemCustomFieldChange>
 */
final class SetCustomLineItemCustomFieldChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $customLineItem;

    /**

     * @var ?string
     */
    private $customLineItemId;

    /**

     * @var null|mixed|mixed
     */
    private $nextValue;

    /**

     * @var null|mixed|mixed
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setCustomLineItemCustomField</code></p>
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
    public function getName()
    {
        return $this->name;
    }

    /**

     * @return null|LocalizedString
     */
    public function getCustomLineItem()
    {
        return $this->customLineItem instanceof LocalizedStringBuilder ? $this->customLineItem->build() : $this->customLineItem;
    }

    /**

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**

     * @return null|mixed
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**

     * @return null|mixed
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
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $customLineItem
     * @return $this
     */
    public function withCustomLineItem(?LocalizedString $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    /**
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @param mixed $nextValue
     * @return $this
     */
    public function withNextValue( $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param mixed $previousValue
     * @return $this
     */
    public function withPreviousValue( $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withCustomLineItem() instead
     * @return $this
     */
    public function withCustomLineItemBuilder(?LocalizedStringBuilder $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    public function build(): SetCustomLineItemCustomFieldChange
    {
        return new SetCustomLineItemCustomFieldChangeModel(
            $this->change,
            $this->name,
            $this->customLineItem instanceof LocalizedStringBuilder ? $this->customLineItem->build() : $this->customLineItem,
            $this->customLineItemId,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetCustomLineItemCustomFieldChangeBuilder
    {
        return new self();
    }
}
