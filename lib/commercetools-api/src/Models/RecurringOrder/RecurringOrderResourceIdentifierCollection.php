<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<RecurringOrderResourceIdentifier>
 * @method RecurringOrderResourceIdentifier current()
 * @method RecurringOrderResourceIdentifier end()
 * @method RecurringOrderResourceIdentifier at($offset)
 */
class RecurringOrderResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert RecurringOrderResourceIdentifier $value
     * @psalm-param RecurringOrderResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderResourceIdentifier $data */
                $data = RecurringOrderResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
