<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryChangeAssetNameAction>
 */
final class CategoryChangeAssetNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $assetId;

    /**

     * @var ?string
     */
    private $assetKey;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * <p>New value to set. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * <p>New value to set. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
    }

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @param ?string $assetId
     * @return $this
     */
    public function withAssetId(?string $assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * @param ?string $assetKey
     * @return $this
     */
    public function withAssetKey(?string $assetKey)
    {
        $this->assetKey = $assetKey;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): CategoryChangeAssetNameAction
    {
        return new CategoryChangeAssetNameActionModel(
            $this->assetId,
            $this->assetKey,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name
        );
    }

    public static function of(): CategoryChangeAssetNameActionBuilder
    {
        return new self();
    }
}
