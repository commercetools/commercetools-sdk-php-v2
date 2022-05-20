<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of StandalonePriceUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method StandalonePriceUpdateAction current()
 * @method StandalonePriceUpdateAction end()
 * @method StandalonePriceUpdateAction at($offset)
 */
class StandalonePriceUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceUpdateAction) {
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
        return function (?int $index): ?StandalonePriceUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = StandalonePriceUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
