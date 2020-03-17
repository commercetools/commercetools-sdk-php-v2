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
 * @extends MapperSequence<StoreSetLanguagesAction>
 * @method StoreSetLanguagesAction current()
 * @method StoreSetLanguagesAction at($offset)
 */
class StoreSetLanguagesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreSetLanguagesAction $value
     * @psalm-param StoreSetLanguagesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSetLanguagesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSetLanguagesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSetLanguagesAction
     */
    protected function mapper()
    {
        return function (int $index): ?StoreSetLanguagesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreSetLanguagesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
