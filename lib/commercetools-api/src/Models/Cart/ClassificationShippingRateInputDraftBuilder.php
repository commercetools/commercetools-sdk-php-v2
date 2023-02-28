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
 * @implements Builder<ClassificationShippingRateInputDraft>
 */
final class ClassificationShippingRateInputDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Key of the value used as a programmatic identifier.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
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
