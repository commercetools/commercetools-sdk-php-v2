<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of BusinessUnit
 * @extends BaseResourceCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method BusinessUnit current()
 * @method BusinessUnit end()
 * @method BusinessUnit at($offset)
 */
class BusinessUnitCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnit) {
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
        return function (?int $index): ?BusinessUnit {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = BusinessUnitModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
