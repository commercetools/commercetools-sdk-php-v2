<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ReviewRatingStatisticsCollectionModel extends JsonCollection implements ReviewRatingStatisticsCollection
{

    /**
     * @param ReviewRatingStatistics $value
     * @return ReviewRatingStatisticsCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewRatingStatistics) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewRatingStatistics
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewRatingStatistics) {
            $data = $this->mapData(ReviewRatingStatistics::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
