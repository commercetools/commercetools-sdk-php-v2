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
final class ScoreShippingRateInputModel extends JsonObjectModel implements ScoreShippingRateInput
{
    public const DISCRIMINATOR_VALUE = 'Score';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $score;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $score = null,
        ?string $type = null
    ) {
        $this->score = $score;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>Abstract value for categorizing a Cart.</p>
     *
     *
     * @return null|int
     */
    public function getScore()
    {
        if (is_null($this->score)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SCORE);
            if (is_null($data)) {
                return null;
            }
            $this->score = (int) $data;
        }

        return $this->score;
    }


    /**
     * @param ?int $score
     */
    public function setScore(?int $score): void
    {
        $this->score = $score;
    }
}
