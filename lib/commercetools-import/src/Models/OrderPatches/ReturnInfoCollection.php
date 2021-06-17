<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReturnInfo>
 * @method ReturnInfo current()
 * @method ReturnInfo at($offset)
 */
class ReturnInfoCollection extends MapperSequence
{
    /**
     * @psalm-assert ReturnInfo $value
     * @psalm-param ReturnInfo|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReturnInfoCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReturnInfo) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReturnInfo
     */
    protected function mapper()
    {
        return function (int $index): ?ReturnInfo {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReturnInfo $data */
                $data = ReturnInfoModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
