<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

use Commercetools\Types\Type\TypeReference;

class CustomerSetCustomTypeActionModel extends CustomerUpdateActionModel implements CustomerSetCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setCustomType';

    /**
     * @var TypeReference
     */
    protected $type;
    /**
     * @var object
     */
    protected $fields;

    /**
     * @return TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(CustomerSetCustomTypeAction::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(TypeReference::class, null);
            }
            $value = $this->mapData(TypeReference::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return object
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            $value = $this->raw(CustomerSetCustomTypeAction::FIELD_FIELDS);
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
     * @param $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

}
