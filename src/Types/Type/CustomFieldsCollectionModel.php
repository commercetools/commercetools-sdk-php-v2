<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonCollection;

class CustomFieldsCollectionModel extends JsonCollection implements CustomFieldsCollection {

    /**
     * @param CustomFields $value
     * @return CustomFieldsCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFields) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFields
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFields) {
            $data = $this->mapData(CustomFields::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
