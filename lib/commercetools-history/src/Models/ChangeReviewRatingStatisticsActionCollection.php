<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeReviewRatingStatisticsAction>
 * @method ChangeReviewRatingStatisticsAction current()
 * @method ChangeReviewRatingStatisticsAction at($offset)
 */
class ChangeReviewRatingStatisticsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeReviewRatingStatisticsAction $value
     * @psalm-param ChangeReviewRatingStatisticsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeReviewRatingStatisticsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeReviewRatingStatisticsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeReviewRatingStatisticsAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeReviewRatingStatisticsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeReviewRatingStatisticsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
