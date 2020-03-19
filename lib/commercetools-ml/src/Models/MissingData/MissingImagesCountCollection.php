<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingImagesCount>
 * @method MissingImagesCount current()
 * @method MissingImagesCount at($offset)
 */
class MissingImagesCountCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingImagesCount $value
     * @psalm-param MissingImagesCount|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingImagesCountCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingImagesCount) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingImagesCount
     */
    protected function mapper()
    {
        return function (int $index): ?MissingImagesCount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingImagesCountModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
