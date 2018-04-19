<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class UpdateActionCollectionModel extends JsonCollection implements UpdateActionCollection
{

    /**
     * @param UpdateAction $value
     * @return UpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof UpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return UpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof UpdateAction) {
            $data = $this->mapData(UpdateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
