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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListChangeTextLineItemNameAction>
 */
final class ShoppingListChangeTextLineItemNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $textLineItemId;

    /**

     * @var ?string
     */
    private $textLineItemKey;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
    }

    /**
     * <p>The <code>key</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemKey()
    {
        return $this->textLineItemKey;
    }

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @param ?string $textLineItemId
     * @return $this
     */
    public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;

        return $this;
    }

    /**
     * @param ?string $textLineItemKey
     * @return $this
     */
    public function withTextLineItemKey(?string $textLineItemKey)
    {
        $this->textLineItemKey = $textLineItemKey;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): ShoppingListChangeTextLineItemNameAction
    {
        return new ShoppingListChangeTextLineItemNameActionModel(
            $this->textLineItemId,
            $this->textLineItemKey,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name
        );
    }

    public static function of(): ShoppingListChangeTextLineItemNameActionBuilder
    {
        return new self();
    }
}
