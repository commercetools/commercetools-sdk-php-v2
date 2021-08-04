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
 * @extends ChangeCollection<SetOrderNumberChange>
 * @method SetOrderNumberChange current()
 * @method SetOrderNumberChange end()
 * @method SetOrderNumberChange at($offset)
 */
class SetOrderNumberChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetOrderNumberChange $value
     * @psalm-param SetOrderNumberChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderNumberChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderNumberChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderNumberChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetOrderNumberChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetOrderNumberChange $data */
                $data = SetOrderNumberChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
