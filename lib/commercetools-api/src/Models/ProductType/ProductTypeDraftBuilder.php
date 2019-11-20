<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeDraft>
 */
final class ProductTypeDraftBuilder implements Builder
{
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
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return null|AttributeDefinitionDraftCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributes(?AttributeDefinitionDraftCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): ProductTypeDraft
    {
        return new ProductTypeDraftModel(
            $this->name,
            $this->description,
            $this->attributes,
            $this->key
        );
    }

    public static function of(): ProductTypeDraftBuilder
    {
        return new self();
    }
}
