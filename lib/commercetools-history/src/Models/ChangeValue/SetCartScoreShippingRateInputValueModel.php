<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SetCartScoreShippingRateInputValueModel extends JsonObjectModel implements SetCartScoreShippingRateInputValue
{


    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $score;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $type = null,
        ?int $score = null
    ) {
        $this->type = $type;
        $this->score = $score;

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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
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
            $this->score =  (int) $data;
        }

        return $this->score;
    }


    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?int $score
     */
    public function setScore(?int $score): void
    {
        $this->score = $score;
    }



}
