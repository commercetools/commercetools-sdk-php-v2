<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Store\StoreUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StoreUpdateActionCollection<StoreSetCustomTypeAction>
 * @method StoreSetCustomTypeAction current()
 * @method StoreSetCustomTypeAction at($offset)
 */
class StoreSetCustomTypeActionCollection extends StoreUpdateActionCollection
{
    /**
     * @psalm-assert StoreSetCustomTypeAction $value
     * @psalm-param StoreSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetCustomTypeAction $data */
                $data = StoreSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
