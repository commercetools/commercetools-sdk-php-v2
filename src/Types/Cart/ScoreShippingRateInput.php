<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface ScoreShippingRateInput extends ShippingRateInput {
    const FIELD_SCORE = 'score';

    /**
     * @return int
     */
    public function getScore();

    /**
     * @param int $score
     * @return $this
     */
    public function setScore(int $score);

}
