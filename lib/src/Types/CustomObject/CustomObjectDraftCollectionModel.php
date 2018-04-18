<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomObjectDraftCollectionModel extends JsonCollection implements CustomObjectDraftCollection {

    /**
     * @param CustomObjectDraft $value
     * @return CustomObjectDraftCollection
     */
    public function add($value) {
        if (!$value instanceof CustomObjectDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomObjectDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomObjectDraft) {
            $data = $this->mapData(CustomObjectDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
