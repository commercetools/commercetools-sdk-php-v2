<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributeGroupDraftModel extends JsonObjectModel implements AttributeGroupDraft
{
    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $description;

    /**
     *
     * @var ?AttributeReferenceCollection
     */
    protected $attributes;

    /**
     *
     * @var ?string
     */
    protected $key;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?LocalizedString $description = null,
        ?AttributeReferenceCollection $attributes = null,
        ?string $key = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->attributes = $attributes;
        $this->key = $key;
    }

    /**
     * <p>Name of the AttributeGroup.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Description of the AttributeGroup.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p><a href="ctp:api:type:AttributeDefinition">Attributes</a> with unique values.</p>
     *
     *
     * @return null|AttributeReferenceCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeReferenceCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * <p>User-defined unique identifier for the AttributeGroup.</p>
     *
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
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?AttributeReferenceCollection $attributes
     */
    public function setAttributes(?AttributeReferenceCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
