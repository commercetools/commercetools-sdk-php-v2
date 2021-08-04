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
 * @extends MyCartUpdateActionCollection<MyCartSetLocaleAction>
 * @method MyCartSetLocaleAction current()
 * @method MyCartSetLocaleAction at($offset)
 */
class MyCartSetLocaleActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetLocaleAction $value
     * @psalm-param MyCartSetLocaleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetLocaleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetLocaleAction $data */
                $data = MyCartSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
