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
 * @extends StoreUpdateActionCollection<StoreSetCustomFieldAction>
 * @method StoreSetCustomFieldAction current()
 * @method StoreSetCustomFieldAction at($offset)
 */
class StoreSetCustomFieldActionCollection extends StoreUpdateActionCollection
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
        return function (?int $index): ?StoreSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSetCustomFieldAction $data */
                $data = StoreSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
