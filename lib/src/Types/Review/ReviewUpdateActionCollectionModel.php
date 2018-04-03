<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ReviewUpdateActionCollectionModel extends JsonCollection implements ReviewUpdateActionCollection {

    /**
     * @param ReviewUpdateAction $value
     * @return ReviewUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ReviewUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
