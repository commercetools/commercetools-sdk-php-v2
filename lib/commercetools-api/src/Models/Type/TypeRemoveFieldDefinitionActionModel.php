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
final class TypeRemoveFieldDefinitionActionModel extends JsonObjectModel implements TypeRemoveFieldDefinitionAction
{
    public const DISCRIMINATOR_VALUE = 'removeFieldDefinition';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $fieldName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $fieldName = null,
        ?string $action = null
    ) {
        $this->fieldName = $fieldName;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">FieldDefinition</a> to remove.
     * The removal of a FieldDefinition deletes <a href="/../api/general-concepts#eventual-consistency">asynchronously</a> all Custom Fields using the FieldDefinition as well.</p>
     *
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
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }
}
