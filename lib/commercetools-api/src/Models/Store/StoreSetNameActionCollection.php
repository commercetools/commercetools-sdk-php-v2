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
 * @extends MapperSequence<StoreSetNameAction>
 *
 * @method StoreSetNameAction current()
 * @method StoreSetNameAction at($offset)
 */
class StoreSetNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreSetNameAction $value
     * @psalm-param StoreSetNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StoreSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
