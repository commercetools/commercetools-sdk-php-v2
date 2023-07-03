<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetCartScoreShippingRateInputValue>
 */
final class SetCartScoreShippingRateInputValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $type;

    /**

     * @var ?int
     */
    private $score;

    /**

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

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
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
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


    public function build(): SetCartScoreShippingRateInputValue
    {
        return new SetCartScoreShippingRateInputValueModel(
            $this->type,
            $this->score
        );
    }

    public static function of(): SetCartScoreShippingRateInputValueBuilder
    {
        return new self();
    }
}
