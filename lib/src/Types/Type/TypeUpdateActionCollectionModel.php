<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeUpdateActionCollectionModel extends UpdateActionCollectionModel implements TypeUpdateActionCollection
{

    /**
     * @param TypeUpdateAction $value
     * @return TypeUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(TypeUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
