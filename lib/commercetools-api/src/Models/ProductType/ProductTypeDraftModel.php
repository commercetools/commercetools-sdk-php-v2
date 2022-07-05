<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTypeDraftModel extends JsonObjectModel implements ProductTypeDraft
{
    /**

     * @var ?string
     */
    protected $key;

    /**

     * @var ?string
     */
    protected $name;

    /**

     * @var ?string
     */
    protected $description;

    /**

     * @var ?AttributeDefinitionDraftCollection
     */
    protected $attributes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $name = null,
        ?string $description = null,
        ?AttributeDefinitionDraftCollection $attributes = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->description = $description;
        $this->attributes = $attributes;
    }

    /**
     * <p>User-defined unique identifier for the ProductType.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Name of the ProductType.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Description of the ProductType.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * <p>Attributes to specify for the ProductType. Products of this ProductType have these Attributes available on their <a href="ctp:api:type:ProductVariant">ProductVariants</a>.</p>
     *

     * @return null|AttributeDefinitionDraftCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeDefinitionDraftCollection::fromArray($data);
        }

        return $this->attributes;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?AttributeDefinitionDraftCollection $attributes
     */
    public function setAttributes(?AttributeDefinitionDraftCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
}
