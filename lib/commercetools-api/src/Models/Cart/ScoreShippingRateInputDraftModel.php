<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ScoreShippingRateInputDraftModel extends JsonObjectModel implements ScoreShippingRateInputDraft
{
    public const DISCRIMINATOR_VALUE = 'Score';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?float
     */
    protected $score;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?float $score = null
    ) {
        $this->score = $score;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**

     * @return null|float
     */
    public function getScore()
    {
        if (is_null($this->score)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_SCORE);
            if (is_null($data)) {
                return null;
            }
            $this->score = (float) $data;
        }

        return $this->score;
    }


    /**
     * @param ?float $score
     */
    public function setScore(?float $score): void
    {
        $this->score = $score;
    }
}
