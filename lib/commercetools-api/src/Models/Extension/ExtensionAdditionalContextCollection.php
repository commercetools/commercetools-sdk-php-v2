<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionAdditionalContext>
 * @method ExtensionAdditionalContext current()
 * @method ExtensionAdditionalContext end()
 * @method ExtensionAdditionalContext at($offset)
 */
class ExtensionAdditionalContextCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionAdditionalContext $value
     * @psalm-param ExtensionAdditionalContext|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionAdditionalContextCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionAdditionalContext) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionAdditionalContext
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionAdditionalContext {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionAdditionalContext $data */
                $data = ExtensionAdditionalContextModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
