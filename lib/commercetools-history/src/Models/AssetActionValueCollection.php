<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssetActionValue>
 * @method AssetActionValue current()
 * @method AssetActionValue at($offset)
 */
class AssetActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert AssetActionValue $value
     * @psalm-param AssetActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssetActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssetActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssetActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?AssetActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AssetActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
