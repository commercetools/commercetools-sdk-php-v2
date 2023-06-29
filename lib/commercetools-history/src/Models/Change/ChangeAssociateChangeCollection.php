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
 * @extends ChangeCollection<ChangeAssociateChange>
 * @method ChangeAssociateChange current()
 * @method ChangeAssociateChange end()
 * @method ChangeAssociateChange at($offset)
 */
class ChangeAssociateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeAssociateChange $value
     * @psalm-param ChangeAssociateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAssociateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAssociateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAssociateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeAssociateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeAssociateChange $data */
                $data = ChangeAssociateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
