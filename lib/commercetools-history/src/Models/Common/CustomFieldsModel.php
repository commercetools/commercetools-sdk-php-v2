<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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
     * @var ?Reference
     */
    protected $type;

    /**
     * @var ?mixed
     */
    protected $fields;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Reference $type = null,
        ?JsonObject $fields = null
    ) {
        $this->type = $type;
        $this->fields = $fields;

    }

    /**
     * @return null|Reference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type =  ReferenceModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>A valid JSON object, based on FieldDefinition.</p>
     *
     * @return null|mixed
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }
            $this->fields =  JsonObjectModel::of($data);
        }

        return $this->fields;
    }


    /**
     * @param ?Reference $type
     */
    public function setType(?Reference $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?JsonObject $fields
     */
    public function setFields(?JsonObject $fields): void
    {
        $this->fields = $fields;
    }



}
