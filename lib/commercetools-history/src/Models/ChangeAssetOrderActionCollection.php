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
 * @extends MapperSequence<ChangeAssetOrderAction>
 * @method ChangeAssetOrderAction current()
 * @method ChangeAssetOrderAction at($offset)
 */
class ChangeAssetOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAssetOrderAction $value
     * @psalm-param ChangeAssetOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAssetOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAssetOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAssetOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAssetOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAssetOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
