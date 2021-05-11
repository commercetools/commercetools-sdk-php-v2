<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ReviewReference>
 * @method ReviewReference current()
 * @method ReviewReference at($offset)
 */
class ReviewReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ReviewReference $value
     * @psalm-param ReviewReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewReference
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewReference $data */
                $data = ReviewReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
