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
 * @extends ReviewUpdateActionCollection<ReviewSetTitleAction>
 * @method ReviewSetTitleAction current()
 * @method ReviewSetTitleAction end()
 * @method ReviewSetTitleAction at($offset)
 */
class ReviewSetTitleActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @psalm-assert ReviewSetTitleAction $value
     * @psalm-param ReviewSetTitleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewSetTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetTitleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewSetTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewSetTitleAction $data */
                $data = ReviewSetTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
