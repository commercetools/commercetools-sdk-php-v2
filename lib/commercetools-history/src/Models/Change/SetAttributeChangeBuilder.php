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
use Commercetools\History\Models\ChangeValue\AttributeValue;
use Commercetools\History\Models\ChangeValue\AttributeValueBuilder;

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

     * @var ?string
     */
    private $catalogData;

    /**

     * @var null|AttributeValue|AttributeValueBuilder
     */
    private $previousValue;

    /**

     * @var null|AttributeValue|AttributeValueBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setAttribute</code></p>
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
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**

     * @return null|AttributeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof AttributeValueBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**

     * @return null|AttributeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AttributeValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?AttributeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?AttributeValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?AttributeValue $nextValue
     * @return $this
     */
    public function withNextValue(?AttributeValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?AttributeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?AttributeValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetAttributeChange
    {
        return new SetAttributeChangeModel(
            $this->change,
            $this->catalogData,
            $this->previousValue instanceof AttributeValueBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof AttributeValueBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetAttributeChangeBuilder
    {
        return new self();
    }
}
