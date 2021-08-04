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
 * @extends ReviewUpdateActionCollection<ReviewSetCustomTypeAction>
 * @method ReviewSetCustomTypeAction current()
 * @method ReviewSetCustomTypeAction end()
 * @method ReviewSetCustomTypeAction at($offset)
 */
class ReviewSetCustomTypeActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @psalm-assert ReviewSetCustomTypeAction $value
     * @psalm-param ReviewSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewSetCustomTypeAction $data */
                $data = ReviewSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
