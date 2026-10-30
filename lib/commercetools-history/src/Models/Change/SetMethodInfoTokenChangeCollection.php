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
 * @extends ChangeCollection<SetMethodInfoTokenChange>
 * @method SetMethodInfoTokenChange current()
 * @method SetMethodInfoTokenChange end()
 * @method SetMethodInfoTokenChange at($offset)
 */
class SetMethodInfoTokenChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMethodInfoTokenChange $value
     * @psalm-param SetMethodInfoTokenChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoTokenChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoTokenChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoTokenChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMethodInfoTokenChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMethodInfoTokenChange $data */
                $data = SetMethodInfoTokenChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
