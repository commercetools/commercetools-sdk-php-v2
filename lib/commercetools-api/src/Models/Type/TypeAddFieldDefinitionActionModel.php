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
final class TypeAddFieldDefinitionActionModel extends JsonObjectModel implements TypeAddFieldDefinitionAction
{
    public const DISCRIMINATOR_VALUE = 'addFieldDefinition';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?FieldDefinition
     */
    protected $fieldDefinition;


    public function __construct(
        FieldDefinition $fieldDefinition = null
    ) {
        $this->fieldDefinition = $fieldDefinition;
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
     * @return null|FieldDefinition
     */
    public function getFieldDefinition()
    {
        if (is_null($this->fieldDefinition)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TypeAddFieldDefinitionAction::FIELD_FIELD_DEFINITION);
            if (is_null($data)) {
                return null;
            }

            $this->fieldDefinition = FieldDefinitionModel::of($data);
        }

        return $this->fieldDefinition;
    }

    public function setFieldDefinition(?FieldDefinition $fieldDefinition): void
    {
        $this->fieldDefinition = $fieldDefinition;
    }
}
