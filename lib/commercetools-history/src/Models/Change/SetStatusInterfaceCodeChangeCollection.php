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
 * @extends ChangeCollection<SetStatusInterfaceCodeChange>
 * @method SetStatusInterfaceCodeChange current()
 * @method SetStatusInterfaceCodeChange end()
 * @method SetStatusInterfaceCodeChange at($offset)
 */
class SetStatusInterfaceCodeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetStatusInterfaceCodeChange $value
     * @psalm-param SetStatusInterfaceCodeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStatusInterfaceCodeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStatusInterfaceCodeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStatusInterfaceCodeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetStatusInterfaceCodeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetStatusInterfaceCodeChange $data */
                $data = SetStatusInterfaceCodeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
