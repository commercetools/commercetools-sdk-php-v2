<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributeLocalizedEnumTypeModel extends JsonObjectModel implements AttributeLocalizedEnumType
{
    public const DISCRIMINATOR_VALUE = 'lenum';
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?AttributeLocalizedEnumValueCollection
     */
    protected $values;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AttributeLocalizedEnumValueCollection $values = null,
        ?string $name = null
    ) {
        $this->values = $values;
        $this->name = $name ?? self::DISCRIMINATOR_VALUE;
    }

    /**
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
     *
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = AttributeLocalizedEnumValueCollection::fromArray($data);
        }

        return $this->values;
    }


    /**
     * @param ?AttributeLocalizedEnumValueCollection $values
     */
    public function setValues(?AttributeLocalizedEnumValueCollection $values): void
    {
        $this->values = $values;
    }
}
