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
 * @extends MapperSequence<AddAssetChange>
 * @method AddAssetChange current()
 * @method AddAssetChange at($offset)
 */
class AddAssetChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddAssetChange $value
     * @psalm-param AddAssetChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddAssetChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddAssetChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddAssetChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddAssetChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddAssetChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
