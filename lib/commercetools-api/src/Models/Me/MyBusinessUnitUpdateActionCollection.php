<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of MyBusinessUnitUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method MyBusinessUnitUpdateAction current()
 * @method MyBusinessUnitUpdateAction end()
 * @method MyBusinessUnitUpdateAction at($offset)
 */
class MyBusinessUnitUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = MyBusinessUnitUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
