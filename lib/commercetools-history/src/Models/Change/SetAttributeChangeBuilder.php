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
use Commercetools\History\Models\Common\Attribute;
use Commercetools\History\Models\Common\AttributeBuilder;

/**
 * @implements Builder<SetAttributeChange>
 */
final class SetAttributeChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Attribute|AttributeBuilder
     */
    private $previousValue;

    /**

     * @var null|Attribute|AttributeBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $catalogData;

    /**

     * @var ?string
     */
    private $variant;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|Attribute
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof AttributeBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Attribute
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AttributeBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Product data that was updated.</p>
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * <p>Identifier of the updated Product Variant.</p>
     * <p>This field holds the SKU, if defined; otherwise the key; otherwise the ID.</p>
     *

     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
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
     * @param ?Attribute $previousValue
     * @return $this
     */
    public function withPreviousValue(?Attribute $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Attribute $nextValue
     * @return $this
     */
    public function withNextValue(?Attribute $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?string $variant
     * @return $this
     */
    public function withVariant(?string $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?AttributeBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?AttributeBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetAttributeChange
    {
        return new SetAttributeChangeModel(
            $this->change,
            $this->previousValue instanceof AttributeBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof AttributeBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->catalogData,
            $this->variant
        );
    }

    public static function of(): SetAttributeChangeBuilder
    {
        return new self();
    }
}
