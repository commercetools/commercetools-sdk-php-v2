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
 * @extends MapperSequence<ChangeAssetNameAction>
 * @method ChangeAssetNameAction current()
 * @method ChangeAssetNameAction at($offset)
 */
class ChangeAssetNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAssetNameAction $value
     * @psalm-param ChangeAssetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAssetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAssetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAssetNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAssetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAssetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
