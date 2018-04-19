<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ExtensionTriggerCollectionModel extends JsonCollection implements ExtensionTriggerCollection
{

    /**
     * @param ExtensionTrigger $value
     * @return ExtensionTriggerCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionTrigger) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionTrigger
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionTrigger) {
            $data = $this->mapData(ExtensionTrigger::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
