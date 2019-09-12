<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class AttributeLocalizedEnumTypeModel extends JsonObjectModel implements AttributeLocalizedEnumType
{
    const DISCRIMINATOR_VALUE = 'lenum';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?AttributeLocalizedEnumValueCollection
     */
    protected $values;

    public function __construct(
        string $name = null,
        AttributeLocalizedEnumValueCollection $values = null
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
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(AttributeLocalizedEnumType::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = AttributeLocalizedEnumValueCollection::fromArray($data);
        }

        return $this->values;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setValues(?AttributeLocalizedEnumValueCollection $values): void
    {
        $this->values = $values;
    }
}
