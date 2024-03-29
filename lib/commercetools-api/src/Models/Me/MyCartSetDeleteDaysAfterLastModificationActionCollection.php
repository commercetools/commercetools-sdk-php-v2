<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartSetDeleteDaysAfterLastModificationAction>
 * @method MyCartSetDeleteDaysAfterLastModificationAction current()
 * @method MyCartSetDeleteDaysAfterLastModificationAction end()
 * @method MyCartSetDeleteDaysAfterLastModificationAction at($offset)
 */
class MyCartSetDeleteDaysAfterLastModificationActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetDeleteDaysAfterLastModificationAction $value
     * @psalm-param MyCartSetDeleteDaysAfterLastModificationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetDeleteDaysAfterLastModificationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetDeleteDaysAfterLastModificationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetDeleteDaysAfterLastModificationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetDeleteDaysAfterLastModificationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetDeleteDaysAfterLastModificationAction $data */
                $data = MyCartSetDeleteDaysAfterLastModificationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
