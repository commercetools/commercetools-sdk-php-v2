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
 * @extends ChangeCollection<SetAttributeChange>
 * @method SetAttributeChange current()
 * @method SetAttributeChange end()
 * @method SetAttributeChange at($offset)
 */
class SetAttributeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAttributeChange $value
     * @psalm-param SetAttributeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAttributeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAttributeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAttributeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetAttributeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAttributeChange $data */
                $data = SetAttributeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
