<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ScoreShippingRateInputDraft>
 */
final class ScoreShippingRateInputDraftBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $score;

    /**
     * <p>Abstract value for categorizing a Cart.</p>
     *

     * @return null|int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param ?int $score
     * @return $this
     */
    public function withScore(?int $score)
    {
        $this->score = $score;

        return $this;
    }


    public function build(): ScoreShippingRateInputDraft
    {
        return new ScoreShippingRateInputDraftModel(
            $this->score
        );
    }

    public static function of(): ScoreShippingRateInputDraftBuilder
    {
        return new self();
    }
}
