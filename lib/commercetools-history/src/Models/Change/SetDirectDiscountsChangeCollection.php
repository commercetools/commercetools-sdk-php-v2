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
 * @extends ChangeCollection<SetDirectDiscountsChange>
 * @method SetDirectDiscountsChange current()
 * @method SetDirectDiscountsChange end()
 * @method SetDirectDiscountsChange at($offset)
 */
class SetDirectDiscountsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDirectDiscountsChange $value
     * @psalm-param SetDirectDiscountsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDirectDiscountsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDirectDiscountsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDirectDiscountsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetDirectDiscountsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDirectDiscountsChange $data */
                $data = SetDirectDiscountsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
