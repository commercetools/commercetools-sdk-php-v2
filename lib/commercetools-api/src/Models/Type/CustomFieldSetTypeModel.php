<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CustomFieldSetTypeModel extends JsonObjectModel implements CustomFieldSetType
{
    const DISCRIMINATOR_VALUE = 'Set';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?FieldType
     */
    protected $elementType;

    public function __construct(
        string $name = null,
        FieldType $elementType = null
    ) {
        $this->name = $name;
        $this->elementType = $elementType;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FieldType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|FieldType
     */
    public function getElementType()
    {
        if (is_null($this->elementType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomFieldSetType::FIELD_ELEMENT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = FieldTypeModel::resolveDiscriminatorClass($data);
            $this->elementType = $className::of($data);
        }

        return $this->elementType;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setElementType(?FieldType $elementType): void
    {
        $this->elementType = $elementType;
    }
}
