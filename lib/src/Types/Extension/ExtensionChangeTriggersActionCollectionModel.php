<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ExtensionChangeTriggersActionCollectionModel extends ExtensionUpdateActionCollectionModel implements ExtensionChangeTriggersActionCollection {

    /**
     * @param ExtensionChangeTriggersAction $value
     * @return ExtensionChangeTriggersActionCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionChangeTriggersAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionChangeTriggersAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionChangeTriggersAction) {
            $data = $this->mapData(ExtensionChangeTriggersAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
