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
 * @extends ChangeCollection<SetSalutationChange>
 * @method SetSalutationChange current()
 * @method SetSalutationChange end()
 * @method SetSalutationChange at($offset)
 */
class SetSalutationChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetSalutationChange $value
     * @psalm-param SetSalutationChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSalutationChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSalutationChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSalutationChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetSalutationChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetSalutationChange $data */
                $data = SetSalutationChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
