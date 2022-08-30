<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShoppingListSetSlugActionModel extends JsonObjectModel implements ShoppingListSetSlugAction
{
    public const DISCRIMINATOR_VALUE = 'setSlug';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?LocalizedString
     */
    protected $slug;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $slug = null,
        ?string $action = null
    ) {
        $this->slug = $slug;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }


    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
}
