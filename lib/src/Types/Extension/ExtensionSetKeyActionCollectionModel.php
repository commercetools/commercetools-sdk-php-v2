<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ExtensionSetKeyActionCollectionModel extends ExtensionUpdateActionCollectionModel implements ExtensionSetKeyActionCollection {

    /**
     * @param ExtensionSetKeyAction $value
     * @return ExtensionSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionSetKeyAction) {
            $data = $this->mapData(ExtensionSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
