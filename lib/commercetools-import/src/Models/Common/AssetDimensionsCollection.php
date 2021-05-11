<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssetDimensions>
 * @method AssetDimensions current()
 * @method AssetDimensions at($offset)
 */
class AssetDimensionsCollection extends MapperSequence
{
    /**
     * @psalm-assert AssetDimensions $value
     * @psalm-param AssetDimensions|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssetDimensionsCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssetDimensions) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssetDimensions
     */
    protected function mapper()
    {
        return function (int $index): ?AssetDimensions {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssetDimensions $data */
                $data = AssetDimensionsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
