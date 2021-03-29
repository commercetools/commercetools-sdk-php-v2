<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImageDimensions>
 * @method ImageDimensions current()
 * @method ImageDimensions at($offset)
 */
class ImageDimensionsCollection extends MapperSequence
{
    /**
     * @psalm-assert ImageDimensions $value
     * @psalm-param ImageDimensions|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImageDimensionsCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImageDimensions) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImageDimensions
     */
    protected function mapper()
    {
        return function (int $index): ?ImageDimensions {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImageDimensionsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
