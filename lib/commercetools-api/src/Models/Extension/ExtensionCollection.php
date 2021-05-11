<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Extension>
 * @method Extension current()
 * @method Extension at($offset)
 */
class ExtensionCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Extension $value
     * @psalm-param Extension|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionCollection
     */
    public function add($value)
    {
        if (!$value instanceof Extension) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Extension
     */
    protected function mapper()
    {
        return function (int $index): ?Extension {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Extension $data */
                $data = ExtensionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
