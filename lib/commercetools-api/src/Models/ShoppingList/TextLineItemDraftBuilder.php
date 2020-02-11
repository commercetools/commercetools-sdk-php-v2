<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<TextLineItemDraft>
 */
final class TextLineItemDraftBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $addedAt;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * <p>Defaults to the current date and time.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Defaults to <code>1</code>.</p>
     *
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
    public function withCustom(?CustomFieldsDraft $custom)
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
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
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

    public function build(): TextLineItemDraft
    {
        return new TextLineItemDraftModel(
            $this->addedAt,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->quantity
        );
    }

    public static function of(): TextLineItemDraftBuilder
    {
        return new self();
    }
}
