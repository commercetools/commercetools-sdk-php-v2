<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class AttributePlainEnumValueModel extends JsonObjectModel implements AttributePlainEnumValue
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $label;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(AttributePlainEnumValue::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            $value = $this->raw(AttributePlainEnumValue::FIELD_LABEL);
            $value = (string)$value;
            $this->label = $value;
        }
        return $this->label;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param string $label
     * @return $this
     */
    public function setLabel(string $label)
    {
        $this->label = (string)$label;

        return $this;
    }

}
