<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ExtensionChangeDestinationActionCollectionModel extends ExtensionUpdateActionCollectionModel implements ExtensionChangeDestinationActionCollection
{

    /**
     * @param ExtensionChangeDestinationAction $value
     * @return ExtensionChangeDestinationActionCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionChangeDestinationAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionChangeDestinationAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionChangeDestinationAction) {
            $data = $this->mapData(ExtensionChangeDestinationAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
