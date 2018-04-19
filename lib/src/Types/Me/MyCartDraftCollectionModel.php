<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class MyCartDraftCollectionModel extends JsonCollection implements MyCartDraftCollection
{

    /**
     * @param MyCartDraft $value
     * @return MyCartDraftCollection
     */
    public function add($value) {
        if (!$value instanceof MyCartDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MyCartDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MyCartDraft) {
            $data = $this->mapData(MyCartDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
