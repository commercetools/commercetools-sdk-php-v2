<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ClassificationShippingRateInputDraft>
 */
final class ClassificationShippingRateInputDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): ClassificationShippingRateInputDraft
    {
        return new ClassificationShippingRateInputDraftModel(
            $this->key
        );
    }

    public static function of(): ClassificationShippingRateInputDraftBuilder
    {
        return new self();
    }
}
