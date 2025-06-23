<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<DiscountGroupReference>
 * @method DiscountGroupReference current()
 * @method DiscountGroupReference end()
 * @method DiscountGroupReference at($offset)
 */
class DiscountGroupReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert DiscountGroupReference $value
     * @psalm-param DiscountGroupReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupReference
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupReference $data */
                $data = DiscountGroupReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
