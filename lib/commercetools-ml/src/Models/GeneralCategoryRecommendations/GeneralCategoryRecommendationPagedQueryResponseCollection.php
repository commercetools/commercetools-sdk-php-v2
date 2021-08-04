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
 * @extends MapperSequence<GeneralCategoryRecommendationPagedQueryResponse>
 * @method GeneralCategoryRecommendationPagedQueryResponse current()
 * @method GeneralCategoryRecommendationPagedQueryResponse end()
 * @method GeneralCategoryRecommendationPagedQueryResponse at($offset)
 */
class GeneralCategoryRecommendationPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert GeneralCategoryRecommendationPagedQueryResponse $value
     * @psalm-param GeneralCategoryRecommendationPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GeneralCategoryRecommendationPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof GeneralCategoryRecommendationPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GeneralCategoryRecommendationPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?GeneralCategoryRecommendationPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GeneralCategoryRecommendationPagedQueryResponse $data */
                $data = GeneralCategoryRecommendationPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
