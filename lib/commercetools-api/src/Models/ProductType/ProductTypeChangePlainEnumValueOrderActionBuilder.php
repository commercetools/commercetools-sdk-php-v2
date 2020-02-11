<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeChangePlainEnumValueOrderAction>
 */
final class ProductTypeChangePlainEnumValueOrderActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var ?AttributePlainEnumValueCollection
     */
    private $values;

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValues(?AttributePlainEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }


    public function build(): ProductTypeChangePlainEnumValueOrderAction
    {
        return new ProductTypeChangePlainEnumValueOrderActionModel(
            $this->attributeName,
            $this->values
        );
    }

    public static function of(): ProductTypeChangePlainEnumValueOrderActionBuilder
    {
        return new self();
    }
}
