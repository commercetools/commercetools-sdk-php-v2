<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductTypeDraftModel extends JsonObjectModel implements ProductTypeDraft
{
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
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $name = null,
        string $description = null,
        AttributeDefinitionDraftCollection $attributes = null,
        string $key = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->attributes = $attributes;
        $this->key = $key;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * @return null|AttributeDefinitionDraftCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductTypeDraft::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeDefinitionDraftCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setAttributes(?AttributeDefinitionDraftCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
