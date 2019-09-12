<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class AttributeEnumTypeModel extends JsonObjectModel implements AttributeEnumType
{
    const DISCRIMINATOR_VALUE = 'enum';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?AttributePlainEnumValueCollection
     */
    protected $values;

    public function __construct(
        string $name = null,
        AttributePlainEnumValueCollection $values = null
    ) {
        $this->name = $name;
        $this->values = $values;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(AttributeEnumType::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = AttributePlainEnumValueCollection::fromArray($data);
        }

        return $this->values;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setValues(?AttributePlainEnumValueCollection $values): void
    {
        $this->values = $values;
    }
}
