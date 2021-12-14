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
 * @extends ChangeCollection<SetPropertyChange>
 * @method SetPropertyChange current()
 * @method SetPropertyChange end()
 * @method SetPropertyChange at($offset)
 */
class SetPropertyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetPropertyChange $value
     * @psalm-param SetPropertyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetPropertyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetPropertyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetPropertyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetPropertyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetPropertyChange $data */
                $data = SetPropertyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
