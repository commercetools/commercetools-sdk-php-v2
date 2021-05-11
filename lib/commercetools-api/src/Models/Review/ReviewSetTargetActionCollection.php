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
 * @extends ReviewUpdateActionCollection<ReviewSetTargetAction>
 * @method ReviewSetTargetAction current()
 * @method ReviewSetTargetAction at($offset)
 */
class ReviewSetTargetActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @psalm-assert ReviewSetTargetAction $value
     * @psalm-param ReviewSetTargetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewSetTargetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetTargetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetTargetAction
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewSetTargetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewSetTargetAction $data */
                $data = ReviewSetTargetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
