<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartsConfiguration>
 * @method CartsConfiguration current()
 * @method CartsConfiguration at($offset)
 */
class CartsConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert CartsConfiguration $value
     * @psalm-param CartsConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartsConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartsConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartsConfiguration
     */
    protected function mapper()
    {
        return function (int $index): ?CartsConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartsConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
