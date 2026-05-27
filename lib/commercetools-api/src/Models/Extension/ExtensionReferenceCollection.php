<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ExtensionReference>
 * @method ExtensionReference current()
 * @method ExtensionReference end()
 * @method ExtensionReference at($offset)
 */
class ExtensionReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ExtensionReference $value
     * @psalm-param ExtensionReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionReference
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionReference $data */
                $data = ExtensionReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
