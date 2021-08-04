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
 * @extends ReviewUpdateActionCollection<ReviewSetTextAction>
 * @method ReviewSetTextAction current()
 * @method ReviewSetTextAction at($offset)
 */
class ReviewSetTextActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @psalm-assert ReviewSetTextAction $value
     * @psalm-param ReviewSetTextAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewSetTextActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetTextAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetTextAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewSetTextAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewSetTextAction $data */
                $data = ReviewSetTextActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
