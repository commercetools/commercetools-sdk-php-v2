<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

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
final class CategorySetMetaTitleActionModel extends JsonObjectModel implements CategorySetMetaTitleAction
{
    public const DISCRIMINATOR_VALUE = 'setMetaTitle';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?LocalizedString
     */
    protected $metaTitle;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $metaTitle = null,
        ?string $action = null
    ) {
        $this->metaTitle = $metaTitle;
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
     * <p>Value to set.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_TITLE);
            if (is_null($data)) {
                return null;
            }

            $this->metaTitle = LocalizedStringModel::of($data);
        }

        return $this->metaTitle;
    }


    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
}
