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
 * @extends MapperSequence<StoreSetCustomFieldAction>
 * @method StoreSetCustomFieldAction current()
 * @method StoreSetCustomFieldAction at($offset)
 */
class StoreSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreSetCustomFieldAction $value
     * @psalm-param StoreSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
