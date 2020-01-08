<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

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
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * <p>User-specific unique identifier for the store.
     * The <code>key</code> is mandatory and immutable.
     * It is used to reference the store.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The name of the store</p>.
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
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
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): StoreDraft
    {
        return new StoreDraftModel(
            $this->key,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name)
        );
    }

    public static function of(): StoreDraftBuilder
    {
        return new self();
    }
}
