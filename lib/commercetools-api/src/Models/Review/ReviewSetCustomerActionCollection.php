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
 * @extends MapperSequence<ReviewSetCustomerAction>
 *
 * @method ReviewSetCustomerAction current()
 * @method ReviewSetCustomerAction at($offset)
 */
class ReviewSetCustomerActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewSetCustomerAction $value
     * @psalm-param ReviewSetCustomerAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ReviewSetCustomerActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetCustomerAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetCustomerAction
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewSetCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewSetCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
