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
 * @extends ChangeCollection<AddAssociateChange>
 * @method AddAssociateChange current()
 * @method AddAssociateChange end()
 * @method AddAssociateChange at($offset)
 */
class AddAssociateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddAssociateChange $value
     * @psalm-param AddAssociateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddAssociateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddAssociateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddAssociateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddAssociateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddAssociateChange $data */
                $data = AddAssociateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
