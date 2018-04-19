<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;

class CustomFieldLocalizedEnumValueModel extends JsonObjectModel implements CustomFieldLocalizedEnumValue
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var LocalizedString
     */
    protected $label;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(CustomFieldLocalizedEnumValue::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            $value = $this->raw(CustomFieldLocalizedEnumValue::FIELD_LABEL);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

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
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }

}
