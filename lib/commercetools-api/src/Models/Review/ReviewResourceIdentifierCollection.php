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
 * @extends MapperSequence<ReviewResourceIdentifier>
 *
 * @method ReviewResourceIdentifier current()
 * @method ReviewResourceIdentifier at($offset)
 */
class ReviewResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewResourceIdentifier $value
     * @psalm-param ReviewResourceIdentifier|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ReviewResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
