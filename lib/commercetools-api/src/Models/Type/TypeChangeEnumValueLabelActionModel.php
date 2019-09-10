<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TypeChangeEnumValueLabelActionModel extends JsonObjectModel implements TypeChangeEnumValueLabelAction
{
    const DISCRIMINATOR_VALUE = 'changeEnumValueLabel';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $fieldName;

    /**
     * @var ?CustomFieldEnumValue
     */
    protected $value;

    public function __construct(
        string $action = null,
        string $fieldName = null,
        CustomFieldEnumValue $value = null
    ) {
        $this->action = $action;
        $this->fieldName = $fieldName;
        $this->value = $value;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TypeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TypeChangeEnumValueLabelAction::FIELD_FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->fieldName = (string) $data;
        }

        return $this->fieldName;
    }

    /**
     * @return null|CustomFieldEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TypeChangeEnumValueLabelAction::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = CustomFieldEnumValueModel::of($data);
        }

        return $this->value;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }

    public function setValue(?CustomFieldEnumValue $value): void
    {
        $this->value = $value;
    }
}
