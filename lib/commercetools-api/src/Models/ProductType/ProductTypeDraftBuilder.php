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
 * @implements Builder<ProductTypeDraft>
 */
final class ProductTypeDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $description;

    /**
     * @var ?AttributeDefinitionDraftCollection
     */
    private $attributes;

    /**
     * <p>User-defined unique identifier for the ProductType.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the ProductType.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Description of the ProductType.</p>
     *
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>Attributes to specify for the ProductType. Products of this ProductType have these Attributes available on their <a href="ctp:api:type:ProductVariant">ProductVariants</a>.</p>
     *
     * @return null|AttributeDefinitionDraftCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

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
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?AttributeDefinitionDraftCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeDefinitionDraftCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): ProductTypeDraft
    {
        return new ProductTypeDraftModel(
            $this->key,
            $this->name,
            $this->description,
            $this->attributes
        );
    }

    public static function of(): ProductTypeDraftBuilder
    {
        return new self();
    }
}
