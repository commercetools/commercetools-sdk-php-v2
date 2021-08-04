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
 * @extends ChangeCollection<SetVatIdChange>
 * @method SetVatIdChange current()
 * @method SetVatIdChange at($offset)
 */
class SetVatIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetVatIdChange $value
     * @psalm-param SetVatIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetVatIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetVatIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetVatIdChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetVatIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetVatIdChange $data */
                $data = SetVatIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
