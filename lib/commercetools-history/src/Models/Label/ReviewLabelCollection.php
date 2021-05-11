<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\History\Models\Label\LabelCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends LabelCollection<ReviewLabel>
 * @method ReviewLabel current()
 * @method ReviewLabel at($offset)
 */
class ReviewLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert ReviewLabel $value
     * @psalm-param ReviewLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewLabel
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewLabel $data */
                $data = ReviewLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
