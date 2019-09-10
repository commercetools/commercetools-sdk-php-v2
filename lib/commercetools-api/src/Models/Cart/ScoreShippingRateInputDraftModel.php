<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;

final class ScoreShippingRateInputDraftModel extends JsonObjectModel implements ScoreShippingRateInputDraft
{
    const DISCRIMINATOR_VALUE = 'Score';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $score;

    public function __construct(
        string $type = null,
        int $score = null
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
            $data = $this->raw(ShippingRateInputDraft::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
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
            $data = $this->raw(ScoreShippingRateInputDraft::FIELD_SCORE);
            if (is_null($data)) {
                return null;
            }
            $this->score = (int) $data;
        }

        return $this->score;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setScore(?int $score): void
    {
        $this->score = $score;
    }
}
