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
 * @extends MapperSequence<ReviewSetKeyAction>
 *
 * @method ReviewSetKeyAction current()
 * @method ReviewSetKeyAction at($offset)
 */
class ReviewSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewSetKeyAction $value
     * @psalm-param ReviewSetKeyAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ReviewSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
