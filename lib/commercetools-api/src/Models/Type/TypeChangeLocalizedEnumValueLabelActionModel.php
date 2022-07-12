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
final class TypeChangeLocalizedEnumValueLabelActionModel extends JsonObjectModel implements TypeChangeLocalizedEnumValueLabelAction
{
    public const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueLabel';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $fieldName;

    /**

     * @var ?CustomFieldLocalizedEnumValue
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $fieldName = null,
        ?CustomFieldLocalizedEnumValue $value = null
    ) {
        $this->fieldName = $fieldName;
        $this->value = $value;
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
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">FieldDefinition</a> to update.</p>
     *

     * @return null|string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->fieldName = (string) $data;
        }

        return $this->fieldName;
    }

    /**
     * <p>New value to set.
     * Must not be empty.</p>
     *

     * @return null|CustomFieldLocalizedEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = CustomFieldLocalizedEnumValueModel::of($data);
        }

        return $this->value;
    }


    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @param ?CustomFieldLocalizedEnumValue $value
     */
    public function setValue(?CustomFieldLocalizedEnumValue $value): void
    {
        $this->value = $value;
    }
}
