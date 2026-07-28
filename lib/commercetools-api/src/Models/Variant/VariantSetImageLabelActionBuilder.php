<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantSetImageLabelAction>
 */
final class VariantSetImageLabelActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $imageUrl;

    /**

     * @var ?string
     */
    private $label;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The URL of the image to set the label.</p>
     *

     * @return null|string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * <p>If <code>true</code>, only the staged image is updated. If <code>false</code>, both the current and staged image is updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?string $imageUrl
     * @return $this
     */
    public function withImageUrl(?string $imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @param ?string $label
     * @return $this
     */
    public function withLabel(?string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): VariantSetImageLabelAction
    {
        return new VariantSetImageLabelActionModel(
            $this->imageUrl,
            $this->label,
            $this->staged
        );
    }

    public static function of(): VariantSetImageLabelActionBuilder
    {
        return new self();
    }
}
