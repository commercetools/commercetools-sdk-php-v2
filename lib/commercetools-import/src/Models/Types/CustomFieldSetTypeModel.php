<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomFieldSetTypeModel extends JsonObjectModel implements CustomFieldSetType
{
    public const DISCRIMINATOR_VALUE = 'Set';
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?FieldType
     */
    protected $elementType;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?FieldType $elementType = null,
        ?string $name = null
    ) {
        $this->elementType = $elementType;
        $this->name = $name ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Name of the field type. Must be unique for a given <a href="ctp:import:type:ResourceTypeId">ResourceTypeId</a>. In case there is a FieldDefinition with the same <code>name</code> in another Type, both FieldDefinitions must have the same <code>type</code>. This value cannot be changed after the Type is imported.</p>
     *
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
     * <p>Field type of the elements in the set.</p>
     *
     *
     * @return null|FieldType
     */
    public function getElementType()
    {
        if (is_null($this->elementType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ELEMENT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = FieldTypeModel::resolveDiscriminatorClass($data);
            $this->elementType = $className::of($data);
        }

        return $this->elementType;
    }


    /**
     * @param ?FieldType $elementType
     */
    public function setElementType(?FieldType $elementType): void
    {
        $this->elementType = $elementType;
    }
}
