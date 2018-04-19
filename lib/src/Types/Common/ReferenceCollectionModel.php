<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\ResourceIdentifierCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReferenceCollectionModel extends ResourceIdentifierCollectionModel implements ReferenceCollection
{

    /**
     * @param Reference $value
     * @return ReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof Reference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Reference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Reference) {
            $resolvedClass = $this->resolveDiscriminator(Reference::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
