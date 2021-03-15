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
 * @extends MapperSequence<AddAssetAction>
 * @method AddAssetAction current()
 * @method AddAssetAction at($offset)
 */
class AddAssetActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddAssetAction $value
     * @psalm-param AddAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddAssetAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
