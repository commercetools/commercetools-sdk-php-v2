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
 * @extends MapperSequence<MyBusinessUnitUpdate>
 * @method MyBusinessUnitUpdate current()
 * @method MyBusinessUnitUpdate end()
 * @method MyBusinessUnitUpdate at($offset)
 */
class MyBusinessUnitUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert MyBusinessUnitUpdate $value
     * @psalm-param MyBusinessUnitUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitUpdate $data */
                $data = MyBusinessUnitUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
