<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CustomFieldEnumTypeModel extends JsonObjectModel implements CustomFieldEnumType
{
    const DISCRIMINATOR_VALUE = 'Enum';
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?CustomFieldEnumValueCollection
     */
    protected $values;

    public function __construct(
        CustomFieldEnumValueCollection $values = null
    ) {
        $this->values = $values;
        $this->name = static::DISCRIMINATOR_VALUE;
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
     * @return null|CustomFieldEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(CustomFieldEnumType::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = CustomFieldEnumValueCollection::fromArray($data);
        }

        return $this->values;
    }

    public function setValues(?CustomFieldEnumValueCollection $values): void
    {
        $this->values = $values;
    }
}
