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
final class CustomFieldsModel extends JsonObjectModel implements CustomFields
{
    /**
     *
     * @var ?TypeReference
     */
    protected $type;

    /**
     *
     * @var ?FieldContainer
     */
    protected $fields;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypeReference $type = null,
        ?FieldContainer $fields = null
    ) {
        $this->type = $type;
        $this->fields = $fields;
    }

    /**
     * <p>Reference to the <a href="ctp:api:type:Type">Type</a> that holds the <a href="ctp:api:type:FieldDefinition">FieldDefinitions</a> for the Custom Fields.</p>
     *
     *
     * @return null|TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeReferenceModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>Object containing the Custom Fields for the <a href="/../api/projects/types#list-of-customizable-data-types">customized resource or data type</a>.</p>
     *
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
        }

        return $this->fields;
    }


    /**
     * @param ?TypeReference $type
     */
    public function setType(?TypeReference $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }
}
