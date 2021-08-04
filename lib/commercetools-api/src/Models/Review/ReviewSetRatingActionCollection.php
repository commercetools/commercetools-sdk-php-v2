<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Review\ReviewUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReviewUpdateActionCollection<ReviewSetRatingAction>
 * @method ReviewSetRatingAction current()
 * @method ReviewSetRatingAction at($offset)
 */
class ReviewSetRatingActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @psalm-assert ReviewSetRatingAction $value
     * @psalm-param ReviewSetRatingAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewSetRatingActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetRatingAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetRatingAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewSetRatingAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewSetRatingAction $data */
                $data = ReviewSetRatingActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
