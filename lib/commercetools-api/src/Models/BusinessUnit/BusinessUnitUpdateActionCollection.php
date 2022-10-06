<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of BusinessUnitUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method BusinessUnitUpdateAction current()
 * @method BusinessUnitUpdateAction end()
 * @method BusinessUnitUpdateAction at($offset)
 */
class BusinessUnitUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitUpdateAction) {
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
        return function (?int $index): ?BusinessUnitUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = BusinessUnitUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
