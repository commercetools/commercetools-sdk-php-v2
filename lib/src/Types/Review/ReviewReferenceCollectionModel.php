<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewReferenceCollectionModel extends ReferenceCollectionModel implements ReviewReferenceCollection
{

    /**
     * @param ReviewReference $value
     * @return ReviewReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewReference) {
            $data = $this->mapData(ReviewReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
