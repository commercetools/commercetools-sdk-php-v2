<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use stdClass;

/**
 * @implements Builder<ProductTypeImport>
 */
final class ProductTypeImportBuilder implements Builder
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

     * @var ?AttributeDefinitionCollection
     */
    private $attributes;

    /**
     * <p>User-defined unique identifier.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>ProductType.name</code>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Maps to <code>ProductType.description</code>.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>The <code>attributes</code> of <a href="/../api/projects/productTypes#producttype">ProductType</a>.</p>
     *

     * @return null|AttributeDefinitionCollection
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
     * @param ?AttributeDefinitionCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeDefinitionCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): ProductTypeImport
    {
        return new ProductTypeImportModel(
            $this->key,
            $this->name,
            $this->description,
            $this->attributes
        );
    }

    public static function of(): ProductTypeImportBuilder
    {
        return new self();
    }
}
