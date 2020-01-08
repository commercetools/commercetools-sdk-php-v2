<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductChangeSlugActionModel extends JsonObjectModel implements ProductChangeSlugAction
{
    const DISCRIMINATOR_VALUE = 'changeSlug';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     * @var ?bool
     */
    protected $staged;

    public function __construct(
        LocalizedString $slug = null,
        bool $staged = null
    ) {
        $this->slug = $slug;
        $this->staged = $staged;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Every slug must be unique across a project, but a product can have the same slug for different languages.
     * Allowed are alphabetic, numeric, underscore (<code>_</code>) and hyphen (<code>-</code>) characters.
     * Maximum size is <code>256</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductChangeSlugAction::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductChangeSlugAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
