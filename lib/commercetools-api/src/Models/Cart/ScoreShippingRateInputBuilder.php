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
 * @implements Builder<ScoreShippingRateInput>
 */
final class ScoreShippingRateInputBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $score;

    /**

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


    public function build(): ScoreShippingRateInput
    {
        return new ScoreShippingRateInputModel(
            $this->score
        );
    }

    public static function of(): ScoreShippingRateInputBuilder
    {
        return new self();
    }
}
