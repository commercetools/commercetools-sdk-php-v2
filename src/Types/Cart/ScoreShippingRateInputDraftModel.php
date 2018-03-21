<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputDraftModel;

class ScoreShippingRateInputDraftModel extends ShippingRateInputDraftModel implements ScoreShippingRateInputDraft {
    const DISCRIMINATOR_VALUE = 'Score';

    /**
     * @var int
     */
    protected $score;

    /**
     * @return int
     */
    public function getScore()
    {
        if (is_null($this->score)) {
            $value = $this->raw(ScoreShippingRateInputDraft::FIELD_SCORE);
            $value = (int)$value;
            $this->score = $value;
        }
        return $this->score;
    }

    /**
     * @param int $score
     * @return $this
     */
    public function setScore(int $score)
    {
        $this->score = (int)$score;

        return $this;
    }

}
