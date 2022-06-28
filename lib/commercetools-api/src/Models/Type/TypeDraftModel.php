<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

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
final class TypeDraftModel extends JsonObjectModel implements TypeDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?array
     */
    protected $resourceTypeIds;

    /**
     * @var ?FieldDefinitionCollection
     */
    protected $fieldDefinitions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?LocalizedString $name = null,
        ?LocalizedString $description = null,
        ?array $resourceTypeIds = null,
        ?FieldDefinitionCollection $fieldDefinitions = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->description = $description;
        $this->resourceTypeIds = $resourceTypeIds;
        $this->fieldDefinitions = $fieldDefinitions;
    }

    /**
     * <p>User-defined unique identifier for the Type.</p>
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
     * <p>Name of the Type.</p>
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
     * <p>Description of the Type.</p>
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
     * <p>Resources and/or data types for which the Type is defined.</p>
     *
     * @return null|array
     */
    public function getResourceTypeIds()
    {
        if (is_null($this->resourceTypeIds)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_RESOURCE_TYPE_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->resourceTypeIds = $data;
        }

        return $this->resourceTypeIds;
    }

    /**
     * <p>Defines Custom Fields.</p>
     *
     * @return null|FieldDefinitionCollection
     */
    public function getFieldDefinitions()
    {
        if (is_null($this->fieldDefinitions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_FIELD_DEFINITIONS);
            if (is_null($data)) {
                return null;
            }
            $this->fieldDefinitions = FieldDefinitionCollection::fromArray($data);
        }

        return $this->fieldDefinitions;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
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
     * @param ?array $resourceTypeIds
     */
    public function setResourceTypeIds(?array $resourceTypeIds): void
    {
        $this->resourceTypeIds = $resourceTypeIds;
    }

    /**
     * @param ?FieldDefinitionCollection $fieldDefinitions
     */
    public function setFieldDefinitions(?FieldDefinitionCollection $fieldDefinitions): void
    {
        $this->fieldDefinitions = $fieldDefinitions;
    }
}
