<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TypeChangeFieldDefinitionOrderActionModel extends JsonObjectModel implements TypeChangeFieldDefinitionOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changeFieldDefinitionOrder';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $fieldNames;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $fieldNames = null
    ) {
        $this->fieldNames = $fieldNames;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getFieldNames()
    {
        if (is_null($this->fieldNames)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(self::FIELD_FIELD_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->fieldNames = $data;
        }

        return $this->fieldNames;
    }


    /**
     * @param ?array $fieldNames
     */
    public function setFieldNames(?array $fieldNames): void
    {
        $this->fieldNames = $fieldNames;
    }
}
