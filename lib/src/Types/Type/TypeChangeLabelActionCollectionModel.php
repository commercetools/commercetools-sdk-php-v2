<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeChangeLabelActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeChangeLabelActionCollection
{

    /**
     * @param TypeChangeLabelAction $value
     * @return TypeChangeLabelActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeChangeLabelAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeChangeLabelAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeChangeLabelAction) {
            $data = $this->mapData(TypeChangeLabelAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
