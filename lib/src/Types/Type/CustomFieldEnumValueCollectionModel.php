<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomFieldEnumValueCollectionModel extends JsonCollection implements CustomFieldEnumValueCollection
{

    /**
     * @param CustomFieldEnumValue $value
     * @return CustomFieldEnumValueCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldEnumValue) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldEnumValue
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldEnumValue) {
            $data = $this->mapData(CustomFieldEnumValue::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
