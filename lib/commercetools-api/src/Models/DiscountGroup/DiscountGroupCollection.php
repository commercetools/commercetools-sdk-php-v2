<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<DiscountGroup>
 * @method DiscountGroup current()
 * @method DiscountGroup end()
 * @method DiscountGroup at($offset)
 */
class DiscountGroupCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert DiscountGroup $value
     * @psalm-param DiscountGroup|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroup) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroup
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroup {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroup $data */
                $data = DiscountGroupModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
