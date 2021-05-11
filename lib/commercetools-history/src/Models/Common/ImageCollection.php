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
 * @extends MapperSequence<Image>
 * @method Image current()
 * @method Image at($offset)
 */
class ImageCollection extends MapperSequence
{
    /**
     * @psalm-assert Image $value
     * @psalm-param Image|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImageCollection
     */
    public function add($value)
    {
        if (!$value instanceof Image) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Image
     */
    protected function mapper()
    {
        return function (int $index): ?Image {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Image $data */
                $data = ImageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
