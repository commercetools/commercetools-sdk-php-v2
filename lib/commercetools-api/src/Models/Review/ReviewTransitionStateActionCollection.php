<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReviewTransitionStateAction>
 *
 * @method ReviewTransitionStateAction current()
 * @method ReviewTransitionStateAction at($offset)
 */
class ReviewTransitionStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewTransitionStateAction $value
     * @psalm-param ReviewTransitionStateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ReviewTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewTransitionStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
