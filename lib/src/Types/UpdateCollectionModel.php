<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class UpdateCollectionModel extends JsonCollection implements UpdateCollection {

    /**
     * @param Update $value
     * @return UpdateCollection
     */
    public function add($value) {
        if (!$value instanceof Update) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Update
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Update) {
            $data = $this->mapData(Update::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
