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
 * @extends MapperSequence<ReviewDraft>
 * @method ReviewDraft current()
 * @method ReviewDraft at($offset)
 */
class ReviewDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewDraft $value
     * @psalm-param ReviewDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewDraft $data */
                $data = ReviewDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
