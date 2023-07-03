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
 * @extends ChangeCollection<SetVariantSelectionChange>
 * @method SetVariantSelectionChange current()
 * @method SetVariantSelectionChange end()
 * @method SetVariantSelectionChange at($offset)
 */
class SetVariantSelectionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetVariantSelectionChange $value
     * @psalm-param SetVariantSelectionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetVariantSelectionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetVariantSelectionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetVariantSelectionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetVariantSelectionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetVariantSelectionChange $data */
                $data = SetVariantSelectionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
