<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class LocalizedStringCollectionModel extends JsonCollection implements LocalizedStringCollection
{

    /**
     * @param LocalizedString $value
     * @return LocalizedStringCollection
     */
    public function add($value) {
        if (!$value instanceof LocalizedString) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return LocalizedString
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof LocalizedString) {
            $data = $this->mapData(LocalizedString::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
