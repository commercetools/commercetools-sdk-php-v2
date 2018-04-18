<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeSetDescriptionActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeSetDescriptionActionCollection {

    /**
     * @param TypeSetDescriptionAction $value
     * @return TypeSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeSetDescriptionAction) {
            $data = $this->mapData(TypeSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
