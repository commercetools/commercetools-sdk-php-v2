<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeLineItemPublishedChange>
 * @method ChangeLineItemPublishedChange current()
 * @method ChangeLineItemPublishedChange end()
 * @method ChangeLineItemPublishedChange at($offset)
 */
class ChangeLineItemPublishedChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeLineItemPublishedChange $value
     * @psalm-param ChangeLineItemPublishedChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLineItemPublishedChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLineItemPublishedChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLineItemPublishedChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeLineItemPublishedChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeLineItemPublishedChange $data */
                $data = ChangeLineItemPublishedChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
