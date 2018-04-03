<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class CustomFieldsModel extends JsonObjectModel implements CustomFields {
    /**
     * @var TypeReference
     */
    protected $type;
    /**
     * @var FieldContainer
     */
    protected $fields;

    /**
     * @return TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(CustomFields::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(TypeReference::class, null);
            }
            $value = $this->mapData(TypeReference::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            $value = $this->raw(CustomFields::FIELD_FIELDS);
            if (is_null($value)) {
                return $this->mapData(FieldContainer::class, null);
            }
            $value = $this->mapData(FieldContainer::class, $value);

            $this->fields = $value;
        }
        return $this->fields;
    }

    /**
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * @param FieldContainer $fields
     * @return $this
     */
    public function setFields(FieldContainer $fields)
    {
        $this->fields = $fields;

        return $this;
    }

}
