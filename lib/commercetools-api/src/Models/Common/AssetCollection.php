<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Asset>
 * @method Asset current()
 * @method Asset at($offset)
 */
class AssetCollection extends MapperSequence
{
    /**
     * @psalm-assert Asset $value
     * @psalm-param Asset|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssetCollection
     */
    public function add($value)
    {
        if (!$value instanceof Asset) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Asset
     */
    protected function mapper()
    {
        return function (?int $index): ?Asset {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Asset $data */
                $data = AssetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
