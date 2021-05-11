<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\GeneralCategoryRecommendations;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<GeneralCategoryRecommendation>
 * @method GeneralCategoryRecommendation current()
 * @method GeneralCategoryRecommendation at($offset)
 */
class GeneralCategoryRecommendationCollection extends MapperSequence
{
    /**
     * @psalm-assert GeneralCategoryRecommendation $value
     * @psalm-param GeneralCategoryRecommendation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GeneralCategoryRecommendationCollection
     */
    public function add($value)
    {
        if (!$value instanceof GeneralCategoryRecommendation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GeneralCategoryRecommendation
     */
    protected function mapper()
    {
        return function (int $index): ?GeneralCategoryRecommendation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GeneralCategoryRecommendation $data */
                $data = GeneralCategoryRecommendationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
