<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of BaseResource
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method BaseResource current()
 * @method BaseResource at($offset)
 */
class BaseResourceCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BaseResourceCollection
     */
    public function add($value)
    {
        if (!$value instanceof BaseResource) {
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
        return function (?int $index): ?BaseResource {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = BaseResourceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
