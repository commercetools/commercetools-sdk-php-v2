<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeReviewRatingStatisticsChange>
 * @method ChangeReviewRatingStatisticsChange current()
 * @method ChangeReviewRatingStatisticsChange at($offset)
 */
class ChangeReviewRatingStatisticsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeReviewRatingStatisticsChange $value
     * @psalm-param ChangeReviewRatingStatisticsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeReviewRatingStatisticsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeReviewRatingStatisticsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeReviewRatingStatisticsChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeReviewRatingStatisticsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeReviewRatingStatisticsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
