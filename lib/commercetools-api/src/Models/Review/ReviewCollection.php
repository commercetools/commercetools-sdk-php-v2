<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Review>
 * @method Review current()
 * @method Review at($offset)
 */
class ReviewCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Review $value
     * @psalm-param Review|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewCollection
     */
    public function add($value)
    {
        if (!$value instanceof Review) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Review
     */
    protected function mapper()
    {
        return function (?int $index): ?Review {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Review $data */
                $data = ReviewModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
