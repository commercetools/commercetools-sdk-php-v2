<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StoreUpdateAction>
 * @method StoreUpdateAction current()
 * @method StoreUpdateAction at($offset)
 */
class StoreUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreUpdateAction $value
     * @psalm-param StoreUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
