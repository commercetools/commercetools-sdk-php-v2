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
 * @extends MapperSequence<MyCartUpdate>
 * @method MyCartUpdate current()
 * @method MyCartUpdate end()
 * @method MyCartUpdate at($offset)
 */
class MyCartUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartUpdate $value
     * @psalm-param MyCartUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartUpdate $data */
                $data = MyCartUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
