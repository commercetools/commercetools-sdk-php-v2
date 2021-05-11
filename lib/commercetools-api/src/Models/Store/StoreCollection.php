<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Store>
 * @method Store current()
 * @method Store at($offset)
 */
class StoreCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Store $value
     * @psalm-param Store|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCollection
     */
    public function add($value)
    {
        if (!$value instanceof Store) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Store
     */
    protected function mapper()
    {
        return function (int $index): ?Store {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Store $data */
                $data = StoreModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
