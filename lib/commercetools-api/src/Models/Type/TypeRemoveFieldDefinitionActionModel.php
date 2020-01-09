<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObjectModel;

final class TypeRemoveFieldDefinitionActionModel extends JsonObjectModel implements TypeRemoveFieldDefinitionAction
{
    const DISCRIMINATOR_VALUE = 'removeFieldDefinition';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $fieldName;

    public function __construct(
        string $fieldName = null
    ) {
        $this->fieldName = $fieldName;
        $this->action = static::DISCRIMINATOR_VALUE;
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
            $data = $this->raw(TypeRemoveFieldDefinitionAction::FIELD_FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->fieldName = (string) $data;
        }

        return $this->fieldName;
    }

    public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }
}
