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
 * @extends MapperSequence<BaseResource>
 * @method BaseResource current()
 * @method BaseResource at($offset)
 */
class BaseResourceCollection extends MapperSequence
{
    /**
     * @psalm-assert BaseResource $value
     * @psalm-param BaseResource|stdClass $value
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
     * @psalm-return callable(int):?BaseResource
     */
    protected function mapper()
    {
        return function (int $index): ?BaseResource {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = BaseResourceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
