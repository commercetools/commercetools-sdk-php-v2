<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class StateDraftCollectionModel extends JsonCollection implements StateDraftCollection
{

    /**
     * @param StateDraft $value
     * @return StateDraftCollection
     */
    public function add($value) {
        if (!$value instanceof StateDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateDraft) {
            $data = $this->mapData(StateDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
