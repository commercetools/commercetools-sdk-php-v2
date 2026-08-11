<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<McpServerJsonOutputFilteringMatcher>
 * @method McpServerJsonOutputFilteringMatcher current()
 * @method McpServerJsonOutputFilteringMatcher end()
 * @method McpServerJsonOutputFilteringMatcher at($offset)
 */
class McpServerJsonOutputFilteringMatcherCollection extends MapperSequence
{
    /**
     * @psalm-assert McpServerJsonOutputFilteringMatcher $value
     * @psalm-param McpServerJsonOutputFilteringMatcher|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerJsonOutputFilteringMatcherCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerJsonOutputFilteringMatcher) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerJsonOutputFilteringMatcher
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerJsonOutputFilteringMatcher {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerJsonOutputFilteringMatcher $data */
                $data = McpServerJsonOutputFilteringMatcherModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
