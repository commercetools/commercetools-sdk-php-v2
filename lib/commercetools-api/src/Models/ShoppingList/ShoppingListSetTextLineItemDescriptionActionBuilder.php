<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ShoppingListSetTextLineItemDescriptionAction>
 */
final class ShoppingListSetTextLineItemDescriptionActionBuilder implements Builder
{
    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    /**
     * @var ?string
     */
    private $textLineItemId;

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return null|string
     */
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
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
    public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;

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

    public function build(): ShoppingListSetTextLineItemDescriptionAction
    {
        return new ShoppingListSetTextLineItemDescriptionActionModel(
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            $this->textLineItemId
        );
    }

    public static function of(): ShoppingListSetTextLineItemDescriptionActionBuilder
    {
        return new self();
    }
}
