<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<TextLineItem>
 */
final class TextLineItemBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $addedAt;

    /**
     * @var CustomFields|?CustomFieldsBuilder
     */
    private $custom;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * <p>When the text line item was added to the shopping list.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>The unique ID of this TextLineItem.</p>.
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return $this
     */
    public function withAddedAt(?DateTimeImmutable $addedAt)
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): TextLineItem
    {
        return new TextLineItemModel(
            $this->addedAt,
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            $this->id,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->quantity
        );
    }

    public static function of(): TextLineItemBuilder
    {
        return new self();
    }
}
