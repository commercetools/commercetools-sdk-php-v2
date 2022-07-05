<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ClassificationShippingRateInput>
 */
final class ClassificationShippingRateInputBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $label;

    /**

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>JSON object where the keys are of type <a href="ctp:api:type:Locale">Locale</a>, and the values are the strings used for the corresponding language.</p>
     *

     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
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

    /**
     * @param ?LocalizedString $label
     * @return $this
     */
    public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @deprecated use withLabel() instead
     * @return $this
     */
    public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;

        return $this;
    }

    public function build(): ClassificationShippingRateInput
    {
        return new ClassificationShippingRateInputModel(
            $this->key,
            $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label
        );
    }

    public static function of(): ClassificationShippingRateInputBuilder
    {
        return new self();
    }
}
