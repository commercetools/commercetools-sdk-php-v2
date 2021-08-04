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
 * @extends ChangeCollection<ChangeCartDiscountsChange>
 * @method ChangeCartDiscountsChange current()
 * @method ChangeCartDiscountsChange end()
 * @method ChangeCartDiscountsChange at($offset)
 */
class ChangeCartDiscountsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeCartDiscountsChange $value
     * @psalm-param ChangeCartDiscountsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCartDiscountsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeCartDiscountsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeCartDiscountsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeCartDiscountsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeCartDiscountsChange $data */
                $data = ChangeCartDiscountsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
