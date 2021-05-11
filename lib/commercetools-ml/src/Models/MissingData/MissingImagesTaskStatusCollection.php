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
 * @extends MapperSequence<MissingImagesTaskStatus>
 * @method MissingImagesTaskStatus current()
 * @method MissingImagesTaskStatus at($offset)
 */
class MissingImagesTaskStatusCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingImagesTaskStatus $value
     * @psalm-param MissingImagesTaskStatus|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingImagesTaskStatusCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingImagesTaskStatus) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingImagesTaskStatus
     */
    protected function mapper()
    {
        return function (int $index): ?MissingImagesTaskStatus {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingImagesTaskStatus $data */
                $data = MissingImagesTaskStatusModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
