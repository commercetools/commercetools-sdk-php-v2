<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SearchIndexingConfigurationValues>
 * @method SearchIndexingConfigurationValues current()
 * @method SearchIndexingConfigurationValues end()
 * @method SearchIndexingConfigurationValues at($offset)
 */
class SearchIndexingConfigurationValuesCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchIndexingConfigurationValues $value
     * @psalm-param SearchIndexingConfigurationValues|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchIndexingConfigurationValuesCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchIndexingConfigurationValues) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchIndexingConfigurationValues
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchIndexingConfigurationValues {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchIndexingConfigurationValues $data */
                $data = SearchIndexingConfigurationValuesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
