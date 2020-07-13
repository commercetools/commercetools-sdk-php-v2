<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreDraft>
 */
final class StoreDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var ?array
     */
    private $languages;

    /**
     * @var ?ChannelResourceIdentifierCollection
     */
    private $distributionChannels;

    /**
     * <p>User-specific unique identifier for the store.
     * The <code>key</code> is mandatory and immutable.
     * It is used to reference the store.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The name of the store</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * <p>Array of ResourceIdentifiers to a Channel with <code>ProductDistribution</code> role</p>
     *
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getDistributionChannels()
    {
        return $this->distributionChannels;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLanguages(?array $languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDistributionChannels(?ChannelResourceIdentifierCollection $distributionChannels)
    {
        $this->distributionChannels = $distributionChannels;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): StoreDraft
    {
        return new StoreDraftModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->languages,
            $this->distributionChannels
        );
    }

    public static function of(): StoreDraftBuilder
    {
        return new self();
    }
}
