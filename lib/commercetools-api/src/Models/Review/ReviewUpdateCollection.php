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
 * @extends MapperSequence<ReviewUpdate>
 * @method ReviewUpdate current()
 * @method ReviewUpdate at($offset)
 */
class ReviewUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewUpdate $value
     * @psalm-param ReviewUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewUpdate $data */
                $data = ReviewUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
