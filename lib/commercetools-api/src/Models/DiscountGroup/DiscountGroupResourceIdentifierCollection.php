<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<DiscountGroupResourceIdentifier>
 * @method DiscountGroupResourceIdentifier current()
 * @method DiscountGroupResourceIdentifier end()
 * @method DiscountGroupResourceIdentifier at($offset)
 */
class DiscountGroupResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert DiscountGroupResourceIdentifier $value
     * @psalm-param DiscountGroupResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupResourceIdentifier $data */
                $data = DiscountGroupResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
