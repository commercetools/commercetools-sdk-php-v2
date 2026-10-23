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
 * @extends ChangeCollection<SetMethodInfoCustomTypeChange>
 * @method SetMethodInfoCustomTypeChange current()
 * @method SetMethodInfoCustomTypeChange end()
 * @method SetMethodInfoCustomTypeChange at($offset)
 */
class SetMethodInfoCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMethodInfoCustomTypeChange $value
     * @psalm-param SetMethodInfoCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMethodInfoCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMethodInfoCustomTypeChange $data */
                $data = SetMethodInfoCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
