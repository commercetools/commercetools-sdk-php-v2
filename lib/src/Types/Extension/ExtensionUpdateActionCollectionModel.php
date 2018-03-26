<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonCollection;

class ExtensionUpdateActionCollectionModel extends JsonCollection implements ExtensionUpdateActionCollection {

    /**
     * @param ExtensionUpdateAction $value
     * @return ExtensionUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ExtensionUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
