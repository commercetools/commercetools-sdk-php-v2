<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class ReviewReferenceModel extends ReferenceModel implements ReviewReference {
    const DISCRIMINATOR_VALUE = 'review';

    /**
     * @var Review
     */
    protected $obj;

    /**
     * @return Review
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(ReviewReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Review::class, null);
            }
            $value = $this->mapData(Review::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Review $obj
     * @return $this
     */
    public function setObj(Review $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
