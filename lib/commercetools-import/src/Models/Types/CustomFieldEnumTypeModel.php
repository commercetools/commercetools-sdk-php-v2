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
final class CustomFieldEnumTypeModel extends JsonObjectModel implements CustomFieldEnumType
{
    public const DISCRIMINATOR_VALUE = 'Enum';
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?CustomFieldEnumValueCollection
     */
    protected $values;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomFieldEnumValueCollection $values = null,
        ?string $name = null
    ) {
        $this->values = $values;
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
     * <p>Allowed values.</p>
     *
     *
     * @return null|CustomFieldEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = CustomFieldEnumValueCollection::fromArray($data);
        }

        return $this->values;
    }


    /**
     * @param ?CustomFieldEnumValueCollection $values
     */
    public function setValues(?CustomFieldEnumValueCollection $values): void
    {
        $this->values = $values;
    }
}
