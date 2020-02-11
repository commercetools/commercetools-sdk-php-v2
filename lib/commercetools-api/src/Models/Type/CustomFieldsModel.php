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


final class CustomFieldsModel extends JsonObjectModel implements CustomFields
{

    /**
     * @var ?TypeReference
     */
    protected $type;

    /**
     * @var ?FieldContainer
     */
    protected $fields;


    public function __construct(
        TypeReference $type = null,
        FieldContainer $fields = null
    ) {
        $this->type = $type;
        $this->fields = $fields;

    }

    /**
     * @return null|TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomFields::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeReferenceModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>A valid JSON object, based on FieldDefinition.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomFields::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
        }

        return $this->fields;
    }

    public function setType(?TypeReference $type): void
    {
        $this->type = $type;
    }

    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }



}
