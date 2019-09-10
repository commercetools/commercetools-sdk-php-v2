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
 * @extends MapperSequence<ReviewSetCustomFieldAction>
 *
 * @method ReviewSetCustomFieldAction current()
 * @method ReviewSetCustomFieldAction at($offset)
 */
class ReviewSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewSetCustomFieldAction $value
     * @psalm-param ReviewSetCustomFieldAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ReviewSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
