<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of OrderEditResult
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method OrderEditResult current()
 * @method OrderEditResult at($offset)
 */
class OrderEditResultCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditResult) {
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
        return function (int $index): ?OrderEditResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = OrderEditResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
