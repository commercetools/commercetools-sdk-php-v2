<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeAssetNameChange>
 * @method ChangeAssetNameChange current()
 * @method ChangeAssetNameChange at($offset)
 */
class ChangeAssetNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAssetNameChange $value
     * @psalm-param ChangeAssetNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAssetNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAssetNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAssetNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAssetNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAssetNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
