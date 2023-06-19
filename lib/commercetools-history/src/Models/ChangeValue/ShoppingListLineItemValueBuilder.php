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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ShoppingListLineItemValue>
 */
final class ShoppingListLineItemValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var ?int
     */
    private $variantId;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Name of the corresponding Product the Product Variant belongs to.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> the ShoppingListLineItem refers to.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

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
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

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

    public function build(): ShoppingListLineItemValue
    {
        return new ShoppingListLineItemValueModel(
            $this->id,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->variantId
        );
    }

    public static function of(): ShoppingListLineItemValueBuilder
    {
        return new self();
    }
}
