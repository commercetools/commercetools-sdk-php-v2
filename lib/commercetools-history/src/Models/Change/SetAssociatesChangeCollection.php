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
 * @extends ChangeCollection<SetAssociatesChange>
 * @method SetAssociatesChange current()
 * @method SetAssociatesChange end()
 * @method SetAssociatesChange at($offset)
 */
class SetAssociatesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAssociatesChange $value
     * @psalm-param SetAssociatesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssociatesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssociatesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssociatesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetAssociatesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAssociatesChange $data */
                $data = SetAssociatesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
