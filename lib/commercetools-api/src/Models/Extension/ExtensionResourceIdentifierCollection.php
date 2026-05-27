<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<ExtensionResourceIdentifier>
 * @method ExtensionResourceIdentifier current()
 * @method ExtensionResourceIdentifier end()
 * @method ExtensionResourceIdentifier at($offset)
 */
class ExtensionResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert ExtensionResourceIdentifier $value
     * @psalm-param ExtensionResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionResourceIdentifier $data */
                $data = ExtensionResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
