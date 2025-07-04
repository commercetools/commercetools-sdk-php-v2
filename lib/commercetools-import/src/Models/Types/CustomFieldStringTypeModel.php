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
final class CustomFieldStringTypeModel extends JsonObjectModel implements CustomFieldStringType
{
    public const DISCRIMINATOR_VALUE = 'String';
    /**
     *
     * @var ?string
     */
    protected $name;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null
    ) {
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
}
