<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<RecurringOrderReference>
 * @method RecurringOrderReference current()
 * @method RecurringOrderReference end()
 * @method RecurringOrderReference at($offset)
 */
class RecurringOrderReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert RecurringOrderReference $value
     * @psalm-param RecurringOrderReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderReference
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderReference $data */
                $data = RecurringOrderReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
