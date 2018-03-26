<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonObjectModel;

class CustomFieldsDraftModel extends JsonObjectModel implements CustomFieldsDraft {
    /**
     * @var mixed
     */
    protected $type;
    /**
     * @var FieldContainer
     */
    protected $fields;

    /**
     * @return mixed
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(CustomFieldsDraft::FIELD_TYPE);
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
            $value = $this->raw(CustomFieldsDraft::FIELD_FIELDS);
            if (is_null($value)) {
                return $this->mapData(FieldContainer::class, null);
            }
            $value = $this->mapData(FieldContainer::class, $value);

            $this->fields = $value;
        }
        return $this->fields;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
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

    /**
     * @return ResourceIdentifier
     */
    public function getTypeAsResourceIdentifier()
    {
        return null;
    }

    /**
     * @return TypeReference
     */
    public function getTypeAsTypeReference()
    {
        return null;
    }

}
