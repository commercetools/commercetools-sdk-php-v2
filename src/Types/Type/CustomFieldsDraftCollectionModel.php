<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonCollection;

class CustomFieldsDraftCollectionModel extends JsonCollection implements CustomFieldsDraftCollection {

    /**
     * @param CustomFieldsDraft $value
     * @return CustomFieldsDraftCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldsDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldsDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldsDraft) {
            $data = $this->mapData(CustomFieldsDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
