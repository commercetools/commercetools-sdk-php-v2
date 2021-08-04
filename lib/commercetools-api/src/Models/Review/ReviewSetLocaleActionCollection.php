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
 * @extends ReviewUpdateActionCollection<ReviewSetLocaleAction>
 * @method ReviewSetLocaleAction current()
 * @method ReviewSetLocaleAction at($offset)
 */
class ReviewSetLocaleActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @psalm-assert ReviewSetLocaleAction $value
     * @psalm-param ReviewSetLocaleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewSetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetLocaleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewSetLocaleAction $data */
                $data = ReviewSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
