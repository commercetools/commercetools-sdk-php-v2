<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ExtensionInputCollectionModel extends JsonCollection implements ExtensionInputCollection
{

    /**
     * @param ExtensionInput $value
     * @return ExtensionInputCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionInput) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionInput
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionInput) {
            $data = $this->mapData(ExtensionInput::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
