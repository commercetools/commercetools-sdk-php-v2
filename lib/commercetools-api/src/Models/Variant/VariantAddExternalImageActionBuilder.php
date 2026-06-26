<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantAddExternalImageAction>
 */
final class VariantAddExternalImageActionBuilder implements Builder
{
    /**

     * @var null|Image|ImageBuilder
     */
    private $image;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Value to add to <code>images</code>.</p>
     *

     * @return null|Image
     */
    public function getImage()
    {
        return $this->image instanceof ImageBuilder ? $this->image->build() : $this->image;
    }

    /**
     * <p>If <code>true</code>, only the staged <code>images</code> is updated. If <code>false</code>, both the current and staged <code>images</code> is updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?Image $image
     * @return $this
     */
    public function withImage(?Image $image)
    {
        $this->image = $image;

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

    /**
     * @deprecated use withImage() instead
     * @return $this
     */
    public function withImageBuilder(?ImageBuilder $image)
    {
        $this->image = $image;

        return $this;
    }

    public function build(): VariantAddExternalImageAction
    {
        return new VariantAddExternalImageActionModel(
            $this->image instanceof ImageBuilder ? $this->image->build() : $this->image,
            $this->staged
        );
    }

    public static function of(): VariantAddExternalImageActionBuilder
    {
        return new self();
    }
}
