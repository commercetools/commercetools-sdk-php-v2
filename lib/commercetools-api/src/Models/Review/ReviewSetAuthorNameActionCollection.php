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
 * @extends ReviewUpdateActionCollection<ReviewSetAuthorNameAction>
 * @method ReviewSetAuthorNameAction current()
 * @method ReviewSetAuthorNameAction at($offset)
 */
class ReviewSetAuthorNameActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @psalm-assert ReviewSetAuthorNameAction $value
     * @psalm-param ReviewSetAuthorNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewSetAuthorNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetAuthorNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetAuthorNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewSetAuthorNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewSetAuthorNameAction $data */
                $data = ReviewSetAuthorNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
